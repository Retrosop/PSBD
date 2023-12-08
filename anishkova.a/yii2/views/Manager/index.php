<?php

use app\models\Manager;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ManagerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Менеджер';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manager-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить менеджера', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idmanager',
            'fio',
            'telef',
            'email:email',
            'goodswork',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Manager $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idmanager' => $model->idmanager]);
                 }
            ],
        ],
    ]); ?>


</div>
