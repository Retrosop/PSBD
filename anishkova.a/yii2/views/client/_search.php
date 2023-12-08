<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\clientSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="client-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idclient') ?>

    <?= $form->field($model, 'urlreferal') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'telef') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'sferawork') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'firma') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
