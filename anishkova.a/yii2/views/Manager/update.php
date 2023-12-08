<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Manager $model */

$this->title = 'Update Manager: ' . $model->idmanager;
$this->params['breadcrumbs'][] = ['label' => 'Managers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmanager, 'url' => ['view', 'idmanager' => $model->idmanager]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manager-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
