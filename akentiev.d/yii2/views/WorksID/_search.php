<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\WorksSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="works-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_works') ?>

    <?= $form->field($model, 'id_student') ?>

    <?= $form->field($model, 'id_sotrudnik') ?>

    <?= $form->field($model, 'id_specialty') ?>

    <?= $form->field($model, 'id_podpis') ?>

    <?php // echo $form->field($model, 'datez') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'typew') ?>

    <?php // echo $form->field($model, 'ozenka') ?>

    <?php // echo $form->field($model, 'mycheckwork') ?>

    <?php // echo $form->field($model, 'docmycheckwork') ?>

    <?php // echo $form->field($model, 'intercheckwork') ?>

    <?php // echo $form->field($model, 'docintercheckwork') ?>

    <?php // echo $form->field($model, 'publicwork') ?>

    <?php // echo $form->field($model, 'filework') ?>

    <?php // echo $form->field($model, 'statuswork') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
