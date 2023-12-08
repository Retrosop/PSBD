<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\statement $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="statement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dates')->textInput() ?>

    <?= $form->field($model, 'idclent')->textInput() ?>

    <?= $form->field($model, 'namework')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'daterin')->textInput() ?>

    <?= $form->field($model, 'daterout')->textInput() ?>

    <?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'summa')->textInput() ?>

    <?= $form->field($model, 'srokkredita')->textInput() ?>

    <?= $form->field($model, 'pervonzvon')->textInput() ?>

    <?= $form->field($model, 'countteam')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idmanager')->textInput() ?>

    <?= $form->field($model, 'resoluciy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'statuswork')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateof')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
