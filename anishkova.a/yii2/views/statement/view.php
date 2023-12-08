<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\statement $model */

$this->title = $model->idstatement;
$this->params['breadcrumbs'][] = ['label' => 'Статус менеджера', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="statement-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'idstatement' => $model->idstatement], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'idstatement' => $model->idstatement], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'сохранить',
            ],
        ]) ?>
    </p>
<?=$abcd
	?><br>
	<?=$abcd
	?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idstatement',
            'dates',
            'idclent',
            'namework',
            'daterin',
            'daterout',
            'desc:ntext',
            'summa',
            'srokkredita',
            'pervonzvon',
            'countteam:ntext',
            'idmanager',
            'resoluciy:ntext',
            'statuswork',
            'dateof',
        ],
    ]) ?>

</div>
