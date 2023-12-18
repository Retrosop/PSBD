<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Works $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="works-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_student')->textInput() ?>

    <?= $form->field($model, 'id_sotrudnik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_speciаlty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_podpis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datez')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'typew')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ozenka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mycheckwork')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'docmycheckwork')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'myoriginalwork')->textInput() ?>

    <?= $form->field($model, 'intercheckwork')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'docintercheckwork')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interoriginalwork')->textInput() ?>

    <?= $form->field($model, 'publicwork')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'filework')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statuswork')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
