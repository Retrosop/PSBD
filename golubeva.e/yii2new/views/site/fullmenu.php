<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    $this->title = 'Меню';
?>

<div class = "full_menu">
    <div class = "jumbotron">
        <div class = "full_menu_text">Меню</div>
    </div>

    <?php 
        $this->beginContent('@app/views/layouts/menu.php');
           
        $this->endContent();

        echo "<div class = big_block_categories>";
            foreach ($model as $category) {
                echo "<div class = 'categories_block'>";
                    if ($category->name_product_categories == 'Напитки') {
                        echo "<a href = '/site/undercategories/$category->id_product_categories'>" . "<div class = category_block>" . Html::img('' . $category->imglink, ['class' => 'img_category_block']);
                            echo "<div class = category_block_text>" . $category->name_product_categories . "</div>";
                        echo "</div>";
                    } else {
                        echo "<a href = '/site/products/$category->id_product_categories'>" . "<div class = category_block>" . Html::img('' . $category->imglink, ['class' => 'img_category_block']);
                            echo "<div class = category_block_text>" . $category->name_product_categories . "</div>";
                        echo "</div>";
                    }
                echo "</a></div>"; 
            }
        echo "</div>";
    ?>
</div>
<style>
/*Меню*/
.full_menu {
    margin-top: 100px;
    position: relative;
    right: 50px;
    width: 1200px;
    margin-left: 80px;
}

.full_menu_text {
    position: relative; 
    color: #E8AB84; 
    font-weight: bold; 
    font-size: 50px; 
    bottom: 30px;
    margin-bottom: 100px;
    }

.categories_block {
    position: relative;
    display: inline-block;
    bottom: 50px;
    margin-left: 50px;
    margin-bottom: -110px;
}

.img_category_block {
    width: 345px;
    border-radius: 10px; 
}

.img_category_block:hover {
    box-shadow: 0 0 5px rgba(0, 0, 0);
    cursor: pointer;
    transition: opacity 200ms linear, transform 200ms linear; 
    transform: scale(1.05);
}

.category_block_text {
    position: relative;
    color: white;
    font-weight: bold;
    font-size: 55px;
    bottom: 155px;
    text-align: center;
}


/*Подменю*/
.undercategories_menu {
    position: relative;
    right: 50px;
    width: 1200px;
}

.undercategories_menu_text {
    position: relative; 
    color: #E8AB84; 
    font-weight: bold; 
    font-size: 50px; 
    bottom: 30px
}


/*Товары*/
.products_menu {
    width: 1200px;
}

.products_menu_text {
    position: relative; 
    color: #E8AB84; 
    font-weight: bold; 
    font-size: 50px; 
    bottom: 40px
}

.block_product {
    position: relative;
    width: 310px;
    height: 660px;
    border-radius: 5px;
    color: rgb(255, 255, 255, 1);
    box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25);
    display: inline-block;
    overflow: hidden;
    right: 80px;
    bottom: 85px;
    margin-left: 90px;
    margin-top: 35px;
}

.product_img {
    width: 260px; 
    display: block; 
    margin: 0 auto; 
    margin-top: 15px;
}

.block_product_title {
    position: relative;
    font-size: 21px;
    top: 20px;
    color: #DC9669;
    font-weight: bold;
    text-align: center;
}

.block_product_line {
    margin-top: 25px;
    background-color: #DC9669;
    border: none;
    height: 2px;
    width: 257px;
}

.block_product_description {
    color: black;
    font-size: 17px;
    margin-left: 25px;
    margin-top: 10px;
    width: 260px;
    text-align: justify;
}

.block_product_price {
    position: absolute;
    bottom: 20px;
    color: #DC9669;
    font-weight: bold;
    font-size: 25px;
    margin-left: 25px;
}

.block_product_parameter {
    position: absolute;
    bottom: 80px;
    color: #777777;
    font-size: 13px;
    margin-left: 25px;
}

.block_product_cpfc {
    position: absolute;
    bottom: 105px;
    color: #777777;
    font-size: 13px;
    margin-left: 25px;
}

.add_product_button {
    position: absolute;
    bottom: 25px;
    left: 243px;
    cursor: pointer;
    width: 40px;
}


/*Товары в подменю*/
.underproducts_menu {
    width: 1200px;
}

.underproducts_menu_text {
    position: relative; 
    color: #E8AB84; 
    font-weight: bold; 
    font-size: 50px; 
    bottom: 40px
}


</style>