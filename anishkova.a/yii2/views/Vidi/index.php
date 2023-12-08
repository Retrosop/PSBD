<?php

use app\models\Vidi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\VidiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Виды ипотеки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vidi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить виды ипотеки', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idvidi',
            'name',
            'desc:ntext',
            'detail:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Vidi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idvidi' => $model->idvidi]);
                 }
            ],
        ],
    ]); ?>


</div>
