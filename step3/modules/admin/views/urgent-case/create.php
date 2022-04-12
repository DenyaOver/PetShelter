<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\UrgentCase */

$this->title = 'Create Urgent Case';
$this->params['breadcrumbs'][] = ['label' => 'Urgent Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urgent-case-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
