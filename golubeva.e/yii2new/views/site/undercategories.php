<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    $this->title = "Подменю '" . $model[0]['categories']['name_product_categories'] . "'";
    $this->params['breadcrumbs'][] = ['label' => 'Меню', 'url' => ['fullmenu']];
    $this->params['breadcrumbs'][] = $this->title;
?>

<div class = "undercategories_menu">
    <div class = "jumbotron">
        <div class = "undercategories_menu_text"><?=  $this->title = "Подменю '" . $model[0]['categories']['name_product_categories'] . "'" ?></div>
    </div>

    <?php 
        $this->beginContent('@app/views/layouts/menu.php');
        $this->endContent();
        
        foreach($model as $undercategory) {
            echo "<div class = 'categories_block'>";
                echo "<a href = '/site/underproducts/$undercategory->id_product_undercategories'>" . "<div class = category_block>" . Html::img('' . $undercategory->imglink, ['class' => 'img_category_block']);
                    echo "<div class = 'category_block_text'>" . $undercategory->name_product_undercategories . "</div>";
                echo "</div>";
            echo "</a></div>";
        }
    ?>
</div>
<style>
/*Подменю*/
.undercategories_menu {
    position: relative;
    right: 50px;
    width: 1200px;
    margin-top: 90px;
}

.undercategories_menu_text {
    position: relative; 
    color: #E8AB84; 
    font-weight: bold; 
    font-size: 50px; 
    margin-bottom: 60px;
    
}
</style>