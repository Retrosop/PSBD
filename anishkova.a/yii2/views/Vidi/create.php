<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Vidi $model */

$this->title = 'Create Vidi';
$this->params['breadcrumbs'][] = ['label' => 'Vidis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vidi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
