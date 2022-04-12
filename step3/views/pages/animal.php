<?php
use app\assets\AnimalAsset;
use yii\bootstrap4\Modal;
use yii\helpers\Html;
AnimalAsset::register($this);
?>

<div class="Container">
    <div class="title">
        <div class="titleName">
             <?php echo $pet->pet . ' ' .$pet->name . ', ' . $pet->age . ' years'; ?>
        </div>
        <div class="titleCharacter">
            Breed: <?php echo $pet->breed; ?>
        </div>
        <div class="titleDescription">
            <div>
                Description:
            </div>
            <div>
                <?php echo $pet->description; ?>
            </div>
        </div>
        <div class="titleButton">
            <?php Modal::begin([
                'title'=> 'Information' ,
                'toggleButton' => ['label' => 'Take a ' . $pet->pet],
            ]);
            echo 'Owner name: ' . $pet->user->name;
            echo '</br></br>Phone number: '.$pet->user->phone;
            echo '</br></br>Region: '.$pet->user->region;
            echo '</br></br>E-mail: '.$pet->user->email;
            Modal::end(); ?>
        </div>
    </div>
    <div class="photo">
        <?php echo Html::img('/uploads/' . $pet ['photo']) ?>
    </div>
</div>uhsekjbkhfskbfhbdf