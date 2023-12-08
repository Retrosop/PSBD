<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Manager $model */

$this->title = $model->idmanager;
$this->params['breadcrumbs'][] = ['label' => 'Managers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="manager-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'idmanager' => $model->idmanager], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'idmanager' => $model->idmanager], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'Сохранить',
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
            'idmanager',
            'fio',
            'telef',
            'email:email',
            'goodswork',
        ],
    ]) ?>

</div>
