<?php

use app\models\Tovar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TovarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tovars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tovar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tovar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_works',
            'id_sotrudnik',
            'id_specialty',
            'id_podpis',
            'datez',
            //'food',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tovar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_works' => $model->id_works]);
                 }
            ],
        ],
    ]); ?>


</div>
