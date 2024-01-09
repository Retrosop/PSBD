<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use app\models\Parameter;
    use app\models\Product;

    $this->title = $model[0]['categories']['name_product_categories'];
    $this->params['breadcrumbs'][] = ['label' => "Подменю '" . $model[0]['categories']['name_product_categories'] . "'", 'url' => ['site/undercategories/7']];
    $this->params['breadcrumbs'][] = $this->title;
?>

<div class = "underproducts_menu">
    <div class = "jumbotron">
        <div class = "underproducts_menu_text"><?= $model[0]['undercategories']['name_product_undercategories'] ?></div>
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
                    'action' => Url::to(['/site/add', 'id' => $product->id]),
                ]);

    ?>
                    <a href = "<?= Url::to(['/site/addunderproduct', 'id' => $product->id]) ?>"><img src = "/img/add_product.png" class = "add_product_button"></a>
    <?php
                ActiveForm::end();
            echo "</div>";
        }
    ?>
</div>
<style>
.underproducts_menu {
    width: 1200px;
    margin-top: 90px;
}

.underproducts_menu_text {
    position: relative; 
    color: #E8AB84; 
    font-weight: bold; 
    font-size: 50px; 
    margin-bottom: 40px;
}
</style>