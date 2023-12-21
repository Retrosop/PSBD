<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TovarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tovar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_works') ?>

    <?= $form->field($model, 'id_sotrudnik') ?>

    <?= $form->field($model, 'id_specialty') ?>

    <?= $form->field($model, 'id_podpis') ?>

    <?= $form->field($model, 'datez') ?>

    <?php // echo $form->field($model, 'food') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
