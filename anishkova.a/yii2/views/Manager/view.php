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
        <?= Html::a('Update', ['update', 'idmanager' => $model->idmanager], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idmanager' => $model->idmanager], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
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
