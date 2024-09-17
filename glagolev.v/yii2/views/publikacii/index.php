<?php

use app\models\Publikacii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\PublikaciiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Publikaciis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publikacii-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Publikacii', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idpublikacii',
            'name',
            'year',
            'vihod',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Publikacii $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idpublikacii' => $model->idpublikacii]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
