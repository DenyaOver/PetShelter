<?php
use app\assets\LogInAsset;
LogInAsset::register($this);
use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Work+Sans:wght@500;600;700&display=swap" rel="stylesheet">
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<body>
<div class="Container">
    <div class="logo">
        <a href="<?= Url::toRoute(['pages/']) ?>">
            <?= Html::img('@web/images/Logo.png', ['height'=>'72px', 'width'=>'75px']);?> <span class="logoPets">Pets<span class="logoHome">home</span></span></a>
    </div>
    <?= $content ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
