<?php
/** @var $model App\Models\User */
?>
<?php $this->title = 'Register'?>

<a href="/contact"><h1>CREATE AN ACCOUNT</h1></a>

<?php $form = App\Core\Form\Form::begin('', 'post'); ?>

  <div class="row">
    <div class="col">
      <?php echo $form->field($model, 'firstname') ?>
    </div>
    <div class="col">
      <?php echo $form->field($model, 'lastname') ?>
    </div>
  </div>
  <?php echo $form->field($model, 'email') ?>
  <?php echo $form->field($model, 'password')->passwordField() ?>
  <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>

<button type="submit" class="btn btn-primary mt-3">Submit</button>
<?php App\Core\Form\Form::end() ?>

<!--<form action="/mvc/public/" method="post">-->
<!--  <div class="mb-3">-->
<!--    <label>First Name</label>-->
<!--    <input type="text" name="firstname" value="--><?php //echo $model->firstname?><!--" class="form-control--><?php //echo $model->hasError('firstname') ? ' is-invalid' : '' ?><!--">-->
<!--    <div class="invalid-feedback">-->
<!--      --><?php //echo $model->getFirstError('firstname') ?>
<!--    </div>-->
<!--  </div>-->
<!--  <div class="mb-3">-->
<!--    <label>Last Name</label>-->
<!--    <input type="text" name="lastname" class="form-control">-->
<!--  </div>-->
<!--  <div class="mb-3">-->
<!--    <label>Password</label>-->
<!--    <input type="password" name="password" class="form-control">-->
<!--  </div>-->
<!--  <div class="mb-3">-->
<!--    <label>Confirm Password</label>-->
<!--    <input type="password" name="confirmPassword" class="form-control">-->
<!--  </div>-->
<!--  <button type="submit" class="btn btn-primary">Submit</button>-->
<!--</form>-->
