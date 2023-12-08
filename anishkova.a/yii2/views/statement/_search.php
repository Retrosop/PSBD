<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\statementSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="statement-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idstatement') ?>

    <?= $form->field($model, 'dates') ?>

    <?= $form->field($model, 'idclent') ?>

    <?= $form->field($model, 'namework') ?>

    <?= $form->field($model, 'daterin') ?>

    <?php // echo $form->field($model, 'daterout') ?>

    <?php // echo $form->field($model, 'desc') ?>

    <?php // echo $form->field($model, 'summa') ?>

    <?php // echo $form->field($model, 'srokkredita') ?>

    <?php // echo $form->field($model, 'pervonzvon') ?>

    <?php // echo $form->field($model, 'countteam') ?>

    <?php // echo $form->field($model, 'idmanager') ?>

    <?php // echo $form->field($model, 'resoluciy') ?>

    <?php // echo $form->field($model, 'statuswork') ?>

    <?php // echo $form->field($model, 'dateof') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
