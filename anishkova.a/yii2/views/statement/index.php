<?php

use app\models\statement;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\statementSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Статус менеджера';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statement-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить статус менеджера', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idstatement',
            'dates',
            'idclent',
            'namework',
            'daterin',
            //'daterout',
            //'desc:ntext',
            //'summa',
            //'srokkredita',
            //'pervonzvon',
            //'countteam:ntext',
            //'idmanager',
            //'resoluciy:ntext',
            //'statuswork',
            //'dateof',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, statement $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idstatement' => $model->idstatement]);
                 }
            ],
        ],
    ]); ?>


</div>
