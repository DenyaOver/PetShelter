<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="title">
      <span class="titleReg">
        Zarejestruj się u nas - to nic nie kosztuje!
      </span>
    <span class="titleSign">
        Już zarejestrowany?<?= Html::a('Wejdż tutaj', ['pages/log-in']) ?>
      </span>
</div>
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Gratulacje zarejestrowałeś się
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Ups... masz kłopoty
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<div class="form">
    <?php $form = ActiveForm::begin(['options' => ['id' => 'RegistrForm']]) ?>
    <div class="formRow">
    <?= $form->field($user, 'name')->label('Twoje imię') ?>
    <?= $form->field($user, 'email')->label('Email')->input('email') ?>
    </div>
    <div class="formRow">
    <?= $form->field($user, 'phone')->label('Numer telefonu')->input('tel') ?>
    <?= $form->field($user, 'region')->label('Twój region') ?>
    </div>
    <div class="pasword">
    <?= $form->field($user, 'password')->label('Hasło')->input('password') ?>
    </div>
<?= Html::submitButton('Rejestracja', ['class'=>'btn btn-success']) ?>
    <?php ActiveForm::end() ?>
    </div>

