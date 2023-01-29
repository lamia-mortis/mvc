<?php

namespace App\Core;

use App\Core\DB\Database;
use App\Core\DB\DbModel;

class Application {

  public static string $ROOT_DIR;

  public string $layout = 'main';
  public Router $router;
  public Request $request;
  public Response $response;
  public static Application $app;
  public ?Controller $controller = null;
  public Database $db;
  public Session $session;
  public ?UserModel $user;
  public string $userClass;
  public View $view;

  public function __construct ($rootPath, array $config) {

    $this->userClass = $config['userClass'];
    self::$app = $this;
    self::$ROOT_DIR = $rootPath;
    $this->request = new Request();
    $this->response = new Response();
    $this->session = new Session();
    $this->router = new Router($this->request, $this->response);
    $this->db = new Database($config['db']);
    $this->view = new View();

    $primaryValue = $this->session->get('user');

    if ($primaryValue) {
      $primaryKey = $this->userClass::primaryKey();
      $this->user = $this->userClass::findOne([$primaryKey => $primaryValue]);
    } else {
      $this->user = null;
    }

  }

  public function login(UserModel $user) {

    $this->user = $user;
    $primaryKey = $user->primaryKey();
    $value = $user->{$primaryKey};
    Application::$app->session->set('user', $value);

    return true;

  }

  public function run() {

    try {
      echo $this->router->resolve();
    } catch (\Exception $e) {
      Application::$app->response->setStatusCode($e->getCode());
      echo $this->view->renderView('error', [
        'exception' => $e,
      ]);
    }

  }

  public function getController(): Controller {
    return $this->controller;
  }

  public function setController(Controller $controller): void {
    $this->controller = $controller;
  }

  public function logout() {
    $this->user = null;
    self::$app->session->remove('user');
  }

  public static function isGuest() {
    return !self::$app->user;
  }

}