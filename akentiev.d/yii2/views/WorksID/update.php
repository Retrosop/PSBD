<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Works $model */

$this->title = 'Update Works: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id_works' => $model->id_works]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="works-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
