<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use app\models\Parameter;
    use app\models\Product;
    use yii\widgets\Pjax;

    $this->title = $model[0]['categories']['name_product_categories'];
    $this->params['breadcrumbs'][] = ['label' => 'Меню', 'url' => ['fullmenu']];
    $this->params['breadcrumbs'][] = $this->title;
?>

<div class = "products_menu">
    <div class = "jumbotron">
        <div class = "products_menu_text"><?= $model[0]['categories']['name_product_categories'] ?></div>
    </div>

    <?php
        echo "<div style = 'position: relative; right: 50px'>";
            $this->beginContent('@app/views/layouts/menu.php');
            $this->endContent();
        echo "</div>";

       
        foreach ($model as $product) {
            echo "<div class = block_product>";
                echo Html::img('' . $product['imglink'], ['class' => 'product_img']);
                echo "<div class = block_product_title>" . $product['title'] . "</div>";
                echo "<hr class = block_product_line>";
                echo "<div class = block_product_description>" . $product['description'] . "</div>";
                echo "<div class = block_product_cpfc>" . $product['cpfc'] . "</div>";
                echo "<div class = block_product_price>" . $product['price'] . " ₽" . "</div>";
                echo "<div class = block_product_parameter>" . $product->parameter . "</div>";

                $form = ActiveForm::begin([
                    'id' => 'myform',
                    'method' => 'post',
                    'fieldConfig' => [
                        'template' => '{input}{label}{error}',
                    ],
                ]);

     //Pjax::begin();?>
                    <a href = "<?= Url::to(['/site/add', 'id' => $product->id]) ?>" <?php //echo "onclick='if(confirm(\"Без авторизации вы не сможете отслеживать свои заказы, забронированные столики и оставлять отзывы\"))submit();else return false;'"?>><img src = "/img/add_product.png" class = "add_product_button"></a>
    <?php //Pjax::end();
                ActiveForm::end();
            echo "</div>";
        }
        
    ?>
</div>
<style>
.products_menu {
margin-top: 90px;
    width: 1200px;
}

.products_menu_text {
margin-bottom: 40px; 
    color: #E8AB84; 
    font-weight: bold; 
    font-size: 50px; 
    bottom: 40px;
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


</style>