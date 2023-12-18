<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $furniture app\models\Furniture[] */

$this->title = 'Catalog';
$this->params['breadcrumbs'][] = $this->title;
?>

<style> 
.furniture-catalog {
    margin-top: 20px;
}

.furniture-catalog .row {
    display: flex;
    flex-wrap: wrap;
}

.furniture-catalog .col-md-4 {
    flex: 0 0 33.33%;
    max-width: 33.33%;
    box-sizing: border-box;
    padding: 0 15px;
    margin-bottom: 20px;
}

.furniture-item {
    border: 1px solid #ddd;
    padding: 15px;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.7) !important;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.furniture-item h2 {
    margin-top: 0;
}

.furniture-image {
    width: 100%;
    height: auto;
    max-height: 200px; /* Ограничивает высоту изображения */
    object-fit: cover; /* Заполняет контейнер и сохраняет пропорции */
    border-bottom: 1px solid #ddd;
    margin-bottom: 10px;
}

</style>

<div class="furniture-catalog">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <?php foreach ($furniture as $item): ?>
            <div class="col-md-4">
                <div class="furniture-item">
                    <?php
                    $imageUrl = $item->image ? Yii::getAlias('@web/uploads/' . $item->image) : Yii::getAlias('@web/img/default-image.jpg');
                    echo Html::img($imageUrl, ['class' => 'furniture-image']);
                    ?>
                    <h2><?= Html::encode($item->name) ?></h2>
                    <p><strong>Price:</strong> $<?= Html::encode($item->price) ?></p>
                    <!-- Другие поля, если есть -->
                    <p><a href="#" class="btn btn-primary">Details</a></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
