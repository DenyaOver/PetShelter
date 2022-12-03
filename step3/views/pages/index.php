<?php
use app\assets\IndexAsset;
use yii\helpers\Html;

IndexAsset::register($this);

?>

<div class="main">
    <span class="first_span">Tutaj ludzie znajdują<br>czworonożnych<br>przyjaciół ze schronisk</span>
    <span class="second_span">Koty i psy szukają właściciela</span>
    <div class="animal">
        <?= Html::a('Znajdź psa', ['pages/dogs'], ['class' => 'animals']) ?>
        <?= Html::a('Znajdź kota', ['pages/cats'], ['class' => 'animals']) ?>
    </div>
</div>
