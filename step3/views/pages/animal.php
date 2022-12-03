<?php
use app\assets\AnimalAsset;
use yii\bootstrap4\Modal;
use yii\helpers\Html;
AnimalAsset::register($this);
?>

<div class="Container">
    <div class="title">
        <div class="titleName">
             <?php echo $pet->pet . ' ' .$pet->name . ', ' . $pet->age . ' lat'; ?>
        </div>
        <div class="titleCharacter">
            Rasa: <?php echo $pet->breed; ?>
        </div>
        <div class="titleDescription">
            <div>
                Opis:
            </div>
            <div>
                <?php echo $pet->description; ?>
            </div>
        </div>
        <div class="titleButton">
            <?php Modal::begin([
                'title'=> 'Informacja' ,
                'toggleButton' => ['label' => 'Wziąć ' . $pet->pet],
            ]);
            echo 'Imię właściciela: ' . $pet->user->name;
            echo '</br></br>Numer telefonu: '.$pet->user->phone;
            echo '</br></br>Region: '.$pet->user->region;
            echo '</br></br>E-mail: '.$pet->user->email;
            Modal::end(); ?>
        </div>
    </div>
    <div class="photo">
        <?php echo Html::img('/uploads/' . $pet ['photo']) ?>
    </div>
</div>