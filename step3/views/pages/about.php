<?php
use app\assets\AboutAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

AboutAsset::register($this);
?>

<div class="About_opis">
    <h1>“ZwierzątDom”</h1><p>Wyjątkowy projekt stworzony, aby<br>ludzie i zwierzęta ze schronisk<br>odnaleźli się i zostali<br>przyjaciółmi na całe życie.</p>
</div>
<div class="main">
    <h1>O projekcie</h1>
    <p>„Petshome” to wyjątkowy projekt, który pomaga spotkać się ludziom i zwierzakom ze schronisk<br>
         i zostań przyjaciółmi na całe życie.</p>
    <p>Misją projektu jest tworzenie kultury odpowiedzialnej postawy
         wobec<br>zwierząt domowych. Decyzja o zabraniu kota lub psa ze schroniska musi być
         świadomy,<br>dlatego pomagamy potencjalnym właścicielom nie tylko w znalezieniu zwierzaka, ale również
         przygotuj się też do życia<br>z nowym przyjacielem: zdobądź niezbędną wiedzę,
         przejść wywiad z <br>kuratorem i uzyskać wsparcie od organizatorów
         projekt.</p>
</div>
<div class="volunteer">
<p>Zostań wolontariuszem</p>
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Dziękujemy! Teraz ty jesteś wolontariuszem
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
    <div class='InheritForm'>
        <h2 class='font-weight-bold'>Zostań wolontariuszem!</h2>
        <?php $form = ActiveForm::begin(['options' => ['id' => 'VolunteerForm']]) ?>
            <?= $form->field($volunteer, 'name')->label('Twoje imię') ?>
            <?= $form->field($volunteer, 'email')->label('Email')->input('email') ?>
            <?= $form->field($volunteer, 'amount')->dropDownList([
                '5' => 'Chcę przekazać 5 euro',
                '10' => 'Chcę przekazać 10 euro',
                '100'=> 'Chcę przekazać 100 euro'
                ], ['prompt' => 'Wybierz ilość:'])->label('Ilość')?>
        <?= Html::submitButton('Podarować', ['class'=>'btn btn-success']) ?>
        <?php ActiveForm::end() ?>
    </div>
</div>
