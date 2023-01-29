<?php
use App\Core\Form\TextAreaField;
$this->title = 'Contact'
?>

<a href="/contact"><h1>CONTACT</h1></a>

<?php $form = App\Core\Form\Form::begin('', 'post'); ?>

<?= $form->field($model, 'subject') ?>
<?= $form->field($model, 'email') ?>
<?= new TextAreaField($model, 'body') ?>
<button type="submit" class="btn btn-primary mt-3">Submit</button>

<?php App\Core\Form\Form::end() ?>

<!--<form action="/contact" method="post">-->
<!--  <div class="mb-3">-->
<!--    <label>Subject</label>-->
<!--    <input type="text" name="subject" class="form-control">-->
<!--  </div>-->
<!--  <div class="mb-3">-->
<!--    <label>Email</label>-->
<!--    <input type="text" name="email" class="form-control">-->
<!--  </div>-->
<!--  <div class="mb-3">-->
<!--    <label>Body</label>-->
<!--    <textarea name="body" class="form-control"></textarea>-->
<!--  </div>-->
<!--  <button type="submit" class="btn btn-primary">Submit</button>-->
<!--</form>-->