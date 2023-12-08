<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\client $model */

$this->title = 'Update Client: ' . $model->idclient;
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idclient, 'url' => ['view', 'idclient' => $model->idclient]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="client-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
