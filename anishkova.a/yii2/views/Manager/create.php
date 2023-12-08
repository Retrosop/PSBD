<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Manager $model */

$this->title = 'Изменить менеджера';
$this->params['breadcrumbs'][] = ['label' => 'Managers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manager-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
