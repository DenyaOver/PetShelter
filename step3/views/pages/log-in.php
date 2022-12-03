<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="title">
      <span class="titleReg">
        Zaloguj się na swoje konto
      </span>
    <span class="titleSign">
        <?= Html::a('Nowy w Pets Reunited? Kliknij tutaj aby się zarejestrować...', ['pages/registration']) ?>
      </span>
</div>
    <div class="form">
        <?php $form = ActiveForm::begin(['options' => ['id' => 'LoginForm'],
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                'inputOptions' => ['class' => 'col-lg-3 form-control'],
                'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
            ],]) ?>
        <?= $form->field($model, 'email')->textInput(['autofocus' => true])->input('email')->label('Twój E-mail') ?>

        <?= $form->field($model, 'password')->passwordInput()->label('Twóje Hasło') ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <?= Html::submitButton('Zaloguj sie', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        <?php ActiveForm::end() ?>
    </div>

