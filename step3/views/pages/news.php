<?php
use app\assets\NewsAsset;
use yii\helpers\Html;

NewsAsset::register($this);
?>

    <div class="title">
        <?php echo $news->type ?>
    </div>
<div class="Container">
    <div class="headerContainer">
        <?php echo $news->title ?>
    </div>
    <div class="centralContainer">
        <?php echo Html::img('/uploads/' . $news ["image"]) ?>
        <?php echo $news->text ?>
    </div>
    <div class="footerContainer">
        <?php echo $news->date ?>
    </div>
</div>
