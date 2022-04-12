<?php
use app\assets\IndexAsset;
use yii\helpers\Html;

IndexAsset::register($this);

?>

<div class="main">
    <span class="first_span">Here people find<br> four-legged<br> friends from shelters</span>
    <span class="second_span">Cats and dogs are looking for an owner</span>
    <div class="animal">
        <?= Html::a('Find a Dog', ['pages/dogs'], ['class' => 'animals']) ?>
        <?= Html::a('Find a Cat', ['pages/cats'], ['class' => 'animals']) ?>
    </div>
</div>
