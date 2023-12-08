<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\client $model */

$this->title = $model->idclient;
$this->params['breadcrumbs'][] = ['label' => 'Клиент', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="client-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['Обновить', 'idclient' => $model->idclient], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['Удалить', 'idclient' => $model->idclient], [
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
            'idclient',
            'urlreferal',
            'fio',
            'telef',
            'email:email',
            'sferawork',
            'comment',
            'firma',
        ],
    ]) ?>

</div>
