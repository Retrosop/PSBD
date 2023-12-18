<?php

use app\models\Works;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\WorksSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Works';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="works-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Works', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_works',
            'id_student',
            'id_sotrudnik',
            'id_specialty',
            'id_podpis',
            //'datez',
            //'name',
            //'status',
            //'typew',
            //'ozenka',
            //'mycheckwork',
            //'docmycheckwork',
            //'intercheckwork',
            //'docintercheckwork',
            //'publicwork',
            //'filework',
            //'statuswork',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Works $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_works' => $model->id_works]);
                 }
            ],
        ],
    ]); ?>


</div>
