<?php
use app\assets\AppAsset;

AppAsset::register($this);
use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Work+Sans:wght@500;600;700&display=swap" rel="stylesheet">
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<body>
<div class="header">
    <div class="logo">
        <a href="<?= Url::toRoute(['pages/']) ?>"><?= Html::img('@web/images/Logo.png', ['height'=>'72px', 'width'=>'75px']);?>
            <span style="padding-left: 15px;">Zwierząt<span class="home">dom</span></span></a>
    </div>
    <div class="nav">
        <div class="navbar-nav">
            <li class="nav-item">
                <?= Html::a('O nas', ['pages/about'], ['class' => 'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= Html::a('Pytania i odpowiedzi', ['pages/faq'], ['class' => 'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= Html::a('Nowości', ['pages/news-page'], ['class' => 'nav-link']) ?>
            </li>
            <li class="nav-item line">

                <?php if(!Yii::$app->user->isGuest): ?>
                <?= Html::a('Wyjść', ['pages/logout'], ['class' => 'nav-link']) ?>
                <?php else: ?>
                <?= Html::a('Zrejestrować się', ['pages/registration'], ['class' => 'nav-link']) ?>
                <?php endif; ?>

            </li>
            <li class="nav-item line">

                <?php if(!Yii::$app->user->isGuest): ?>
                    <?= Html::a('Moja strona', ['pages/profile'], ['class' => 'nav-link']) ?>
                <?php else: ?>
                    <?= Html::a('Wejść', ['pages/profile'], ['class' => 'nav-link']) ?>
                <?php endif; ?>

            </li>
        </div>
    </div>
    <div class="number">
        <div class="phone">
            <?= Html::img('@web/images/phone.png', ['height'=>'18px', 'width'=>'19px']);?></div>
        <div class="opis">
            <span style="font-size: 18px; padding-bottom: 5px;">+48791950615</span>
            <span style="font-size: 16px; font-weight: normal;">Każdy dzień od 9:00 do<br> 20:00</span></div>
    </div>
</div>

    <?= $content ?>

<div class="footer">
    <table>
        <tr class="headers">
            <th>E-MAIL:</th>
            <th>Linki socialne:</th>
            <th style="text-align: center; padding-left: 0px;">Wesprzyj nas:</th>
        </tr>

        <tr style="height: 87px">
            <td>denya.sherstiuk@gmail.com</td>
            <td>Facebook</td>
            <td rowspan="4" style="text-align: center; padding-left: 0px;">
                <?= Html::img('@web/images/Visa.png', ['height'=>'64px', 'width'=>'198px']);?>
                <?= Html::img('@web/images/Mastercard.png', ['height'=>'97px', 'width'=>'117px']);?>
                <?= Html::img('@web/images/privat.png', ['height'=>'96px', 'width'=>'96px']);?><br><br>
                <?= Html::img('@web/images/wayforpay.png', ['height'=>'68px', 'width'=>'340px']);?>
            </td>
        </tr>
        <tr style="height: 87px">
            <th class="headers">Numer:</th>
            <td>Instagram</td>
        </tr>

        <tr style="height: 87px">
            <td>+48791950615</td>
            <td>Twitter</td>
        </tr>

        <tr style="height: 87px">
            <td>+48570097422</td>
            <td>YouTube</td>
        </tr>
    </table>
    <h1>Wrocław, Jantarowa 10/12</h1>
    <h6>© 2021, petshome.com</h6>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
