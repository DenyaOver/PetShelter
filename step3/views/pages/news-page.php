<?php
use app\assets\NewsPageAsset;
use yii\helpers\Html;
use yii\helpers\Url;

NewsPageAsset::register($this);
?>

<div>
<div class="title">
    Aktualności
</div>
<div class="Container">
    <div class="headerContainer">
    </div>
    <div class="centralContainer">
        <?php foreach ($news as $news) :?>
            <a href=" <?php echo Url::toRoute(['pages/news', 'id'=>$news['id'], 'type'=>$news['type']]) ?> ">
                <div class="news">
                    <div class="newsPhoto">
                        <?php echo Html::img('/uploads/' . $news ["image"]) ?>
                    </div>
                    <div class="newsName">
                        <?php echo $news ['title'] ?>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
        </div>
    <div class="headerUrgetCase">Pilna sprawa</div>
    <div class="centralContainer">
            <?php foreach ($urgent_case as $case) :?>
                <a href=" <?php echo Url::toRoute(['pages/news', 'id'=>$case['id'], 'type'=>$case['type']]) ?> ">
                    <div class="news">
                        <div class="newsPhoto">
                            <?php echo Html::img('/uploads/' . $case ["image"]) ?>
                        </div>
                        <div class="newsName">
                            <?php echo $case ['title'] ?>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
