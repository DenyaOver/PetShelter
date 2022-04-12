<?php
use app\assets\FindAsset;
use yii\helpers\Html;
use yii\helpers\Url;
FindAsset::register($this);
?>

<div class="title">
    Find a dog
</div>
<div class="Container">
    <div class="headerContainer">
        Found (<?php echo count($dogs); ?>)
    </div>
    <div class="centralContainer">
        <?php foreach ($dogs as $dog) :?>
        <a href=" <?php echo Url::toRoute(['pages/animal', 'id'=>$dog['id'], 'type'=>$dog['pet']]) ?> ">
        <div class="animal">
                <?php echo Html::img('/uploads/' .$dog ['photo']) ?>
                <div class="animalName"> <?php echo $dog ['name'] ?> </div>
                <div class="animalCharackters">
                    <span> <?php echo $dog ['sex'] ?> </span>
                    <span> <?php echo $dog ['age'] ?> </span>
                </div>
        </div>
        </a>
        <?php endforeach; ?>
    </div>
</div>
