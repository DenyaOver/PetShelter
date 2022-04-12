<?php
use app\assets\ProfileAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

ProfileAsset::register($this);
?>

<div class="Container">
    <div class="profile">
        <div class="photo">
            <?php echo Html::img('/uploads/' . Yii::$app->user->identity['image'])  ?>
        </div>
        <div class="information">
            <table>
                <tr style="border: none">
                    <th class="informationProfile"><div class="informationProfile">Region:</div></th>
                    <td><div class="informationDescription"><?php echo Yii::$app->user->identity['region'] ?></div></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <th> <?php echo Yii::$app->user->identity['name'] ?> </th>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <th><?php echo Yii::$app->user->identity['email'] ?></th>
                </tr>
                <tr>
                    <th>Phone number</th>
                    <th><?php echo Yii::$app->user->identity['phone'] ?></th>
                </tr>
            </table>
        </div>
    </div>

    <div class="addForm">

        <select id="material">
            <option class="dog" selected>Dog</option>
            <option class="cat">Cat</option>
            <option class="news">News</option>
            <option class="urgentCase">Urgent Case</option>
        </select>

        <div id="urgentCase">
            <?php if (Yii::$app->session->hasFlash('successUrgentCase')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Urgent Case Add
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if (Yii::$app->session->hasFlash('errorUrgentCase')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Oops... you have some trouble
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php $form = ActiveForm::begin(['options' => ['id' => 'AddUrgentCaseForm']]) ?>
            <?= $form->field($urgentCase, 'title')->label('News title*') ?>
            <?= $form->field($urgentCase, 'type')->label('News*')->textInput(['readonly' => true, 'value' => 'Urgent Case']) ?>
            <?= $form->field($urgentCase, 'text')->input('textarea')->label('Description*') ?>
            <?= $form->field($urgentCase, 'image')->fileInput() ?>
            <?= Html::submitButton('Add Urgent Case', ['class'=>'btn btn-success']) ?>
            <?php ActiveForm::end() ?>
        </div>

        <div id="news">
            <?php if (Yii::$app->session->hasFlash('successNews')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    News Add
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if (Yii::$app->session->hasFlash('errorNews')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Oops... you have some trouble
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php $form = ActiveForm::begin(['options' => ['id' => 'AddNewsForm']]) ?>
            <?= $form->field($news, 'title')->label('News title*') ?>
            <?= $form->field($news, 'type')->label('News*')->textInput(['readonly' => true, 'value' => 'News']) ?>
            <?= $form->field($news, 'text')->input('textarea')->label('Description*') ?>
            <?= $form->field($news, 'image')->fileInput() ?>
            <?= Html::submitButton('Add News', ['class'=>'btn btn-success']) ?>
            <?php ActiveForm::end() ?>
        </div>

        <div id="cat">
            <?php if (Yii::$app->session->hasFlash('successCat')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Cat Add
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if (Yii::$app->session->hasFlash('errorCat')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Oops... you have some trouble
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php $form = ActiveForm::begin(['options' => ['id' => 'AddCatForm']]) ?>
            <?= $form->field($cat, 'name')->label('Pets name*') ?>
            <?= $form->field($cat, 'age')->label('Pets age') ?>
            <?= $form->field($cat, 'breed')->label('Pets breed') ?>
            <?= $form->field($cat, 'sex')->dropDownList(['male' => 'male','female' => 'female'], ['prompt' => 'Choose Sex:'])->label('Pets sex*') ?>
            <?= $form->field($cat, 'pet')->label('Pet*')->textInput(['readonly' => true, 'value' => 'Cat']) ?>
            <?= $form->field($cat, 'description')->input('textarea')->label('Description*') ?>
            <?= Html::submitButton('Add Cat', ['class'=>'btn btn-success']) ?>
            <?= $form->field($cat, 'photo')->fileInput() ?>
            <?php ActiveForm::end() ?>
        </div>

        <div id="dog">
        <?php if (Yii::$app->session->hasFlash('successDog')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Dog Add
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if (Yii::$app->session->hasFlash('errorDog')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Oops... you have some trouble
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
            <?php $form = ActiveForm::begin(['options' => ['id' => 'AddDogForm']]) ?>
            <?= $form->field($dog, 'name')->label('Pets name*') ?>
            <?= $form->field($dog, 'age')->label('Pets age') ?>
            <?= $form->field($dog, 'breed')->label('Pets breed') ?>
            <?= $form->field($dog, 'sex')->dropDownList(['male' => 'male','female' => 'female'], ['prompt' => 'Choose Sex:'])->label('Pets sex*') ?>
            <?= $form->field($dog, 'pet')->label('Pet*')->textInput(['readonly' => true, 'value' => 'Dog']) ?>
            <?= $form->field($dog, 'description')->input('textarea')->label('Description*') ?>
            <?= $form->field($dog, 'photo')->fileInput() ?>
            <?= Html::submitButton('Add Dog', ['class'=>'btn btn-success']) ?>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
