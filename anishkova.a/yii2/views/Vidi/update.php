<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Vidi $model */

$this->title = 'Update Vidi: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Виды ипотеки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'idvidi' => $model->idvidi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vidi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
