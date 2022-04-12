<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="title">
      <span class="titleReg">
          Register with us - it's free!
      </span>
    <span class="titleSign">
          Already registred?<?= Html::a('Sign in here', ['pages/log-in']) ?>
      </span>
</div>
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Congratulations you registred
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Oops... you have some trouble
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<div class="form">
    <?php $form = ActiveForm::begin(['options' => ['id' => 'RegistrForm']]) ?>
    <div class="formRow">
    <?= $form->field($user, 'name')->label('Your name') ?>
    <?= $form->field($user, 'email')->label('Email')->input('email') ?>
    </div>
    <div class="formRow">
    <?= $form->field($user, 'phone')->label('Phone number')->input('tel') ?>
    <?= $form->field($user, 'region')->label('Your region') ?>
    </div>
    <div class="pasword">
    <?= $form->field($user, 'password')->label('Password')->input('password') ?>
    </div>
<?= Html::submitButton('Registration', ['class'=>'btn btn-success']) ?>
    <?php ActiveForm::end() ?>
    </div>

