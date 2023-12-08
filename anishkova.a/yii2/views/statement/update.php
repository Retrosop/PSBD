<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\statement $model */

$this->title = 'Update Statement: ' . $model->idstatement;
$this->params['breadcrumbs'][] = ['label' => 'Statements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idstatement, 'url' => ['view', 'idstatement' => $model->idstatement]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="statement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
