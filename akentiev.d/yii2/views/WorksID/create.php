<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Works $model */

$this->title = 'Create Works';
$this->params['breadcrumbs'][] = ['label' => 'Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="works-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
