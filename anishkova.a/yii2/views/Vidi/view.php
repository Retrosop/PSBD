<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Vidi $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Vidis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vidi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idvidi' => $model->idvidi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idvidi' => $model->idvidi], [
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
            'idvidi',
            'name',
            'desc:ntext',
            'detail:ntext',
        ],
    ]) ?>

</div>
