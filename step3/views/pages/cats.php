<?php
use app\assets\FindAsset;
use yii\helpers\Html;
use yii\helpers\Url;

FindAsset::register($this);
?>

<div class="title">
    Znajdź kota
</div>
<div class="Container">
    <div class="headerContainer">
        Znaleziono (<?php echo count($cats); ?>)
    </div>
    <div class="centralContainer">
        <?php foreach ($cats as $cat) :?>
            <a href=" <?php echo Url::toRoute(['pages/animal', 'id'=>$cat['id'], 'type'=>$cat['pet']]) ?> ">
                <div class="animal">
                    <?php echo Html::img('/uploads/' . $cat ['photo']) ?>
                    <div class="animalName"> <?php echo $cat ['name'] ?> </div>
                    <div class="animalCharackters">
                        <span> <?php echo $cat ['sex'] ?> </span>
                        <span> <?php echo $cat ['age'] ?> </span>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
