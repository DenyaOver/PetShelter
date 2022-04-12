<?php

use app\modules\admin\models\UrgentCase;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urgent Cases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urgent-case-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Urgent Case', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title:ntext',
            'date',
            'text:ntext',
            'image:ntext',
            //'type',
            //'user_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UrgentCase $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
