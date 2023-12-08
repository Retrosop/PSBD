<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ManagerSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="manager-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idmanager') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'telef') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'goodswork') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
