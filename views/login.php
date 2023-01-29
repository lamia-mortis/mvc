<?php
/** @var $model App\Models\User */
?>
<?php $this->title = 'Login'?>

<a href="/contact"><h1>LOGIN</h1></a>

<?php $form = App\Core\Form\Form::begin('', 'post'); ?>

<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<button type="submit" class="btn btn-primary mt-3">Submit</button>

<?php App\Core\Form\Form::end() ?>