<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Publikacii $model */

$this->title = 'Update Publikacii: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Publikaciis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'idpublikacii' => $model->idpublikacii]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publikacii-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
