<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Publikacii $model */

$this->title = 'Create Publikacii';
$this->params['breadcrumbs'][] = ['label' => 'Publikaciis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publikacii-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
