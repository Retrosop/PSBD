<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\client $model */

$this->title = 'Создать клиента';
$this->params['breadcrumbs'][] = ['label' => 'Клиент', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
