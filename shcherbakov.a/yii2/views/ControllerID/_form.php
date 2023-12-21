<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tovar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tovar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sotrudnik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_specialty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_podpis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datez')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'food')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
