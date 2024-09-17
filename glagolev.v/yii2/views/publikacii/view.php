<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Publikacii $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Publikaciis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="publikacii-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idpublikacii' => $model->idpublikacii], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idpublikacii' => $model->idpublikacii], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idpublikacii',
            'name',
            'year',
            'vihod',
        ],
    ]) ?>

</div>
