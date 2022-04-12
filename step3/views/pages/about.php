<?php
use app\assets\AboutAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

AboutAsset::register($this);
?>

<div class="About_opis">
    <h1>“Petshome”</h1><p>A unique project created so that<br> people and animals from shelters<br> can find each other and become<br> friends for life.</p>
</div>
<div class="main">
    <h1>About project</h1>
    <p>“Petshome” is a unique project that helps people and pets from shelters meet<br>
        and become lifelong friends.</p>
    <p>The mission of the project is to create a culture of responsible attitude
        towards<br> pets. The decision to take a cat or dog from a shelter must be
        conscious, which<br> is why we help potential owners not only find a pet, but
        also prepare for life<br> with a new friend: acquire the necessary knowledge,
        pass an interview with a<br> curator, and get support from the organizers of the
        project.</p>
</div>
<div class="volunteer">
<p>Be our Volunteer</p>
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Thank you! Now you are our Volunteer
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
<?php $form = ActiveForm::begin(['options' => ['id' => 'VolunteerForm']]) ?>
    <?= $form->field($volunteer, 'name')->label('Your name') ?>
    <?= $form->field($volunteer, 'email')->label('Email')->input('email') ?>
    <?= $form->field($volunteer, 'amount')->dropDownList(['5' => 'I want inherit 5 euro','10' => 'I want inherit 10 euro',
        '100'=> 'I want inherit 100 euro'], ['prompt' => 'Choose amount:'])->label('Amount')?>
<?= Html::submitButton('Inherit', ['class'=>'btn btn-success']) ?>
<?php ActiveForm::end() ?>
</div>
