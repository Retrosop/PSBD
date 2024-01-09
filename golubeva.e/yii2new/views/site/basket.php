<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use kartik\datetime\DateTimePicker;

    $this->title = 'Корзина';
?>

<?php if (!empty($cartItems = $cart->getItems())): ?>
    <a href = "<?= Url::to(['site/clear']) ?>"><button class = "empty_basket_button">Очистить корзину</button></a>
<?php endif; ?>

<div class = "site-basket">
    <div class = "jumbotron">
        <div class = "basket_name">Корзина товаров</div>
    </div>

    <?php if(!empty($cartItems = $cart->getItems())): ?>
        <div class = "table-responsive" id = "basket_table">
            <table class = "table" style = "border: 1px solid #CCCCCC; border-collapse: collapse;">
                <body>
                    <tr>
                        <th style = "color: black; border: 1px solid #CCCCCC">Фото</th>
                        <th style = "color: black; border: 1px solid #CCCCCC">Название</th>
                        <th style = "color: black; border: 1px solid #CCCCCC">Описание</th>
                        <th style = "color: black; border: 1px solid #CCCCCC; width: 210px">Калорийность</th>
                        <th style = "color: black; border: 1px solid #CCCCCC">Параметры</th>
                        <th style = "color: black; border: 1px solid #CCCCCC">Цена за штуку</th>
                        <th style = "color: black; border: 1px solid #CCCCCC">Количество</th>
                        <th style = "color: black; border: 1px solid #CCCCCC">Цена</th>
                        <th style = "color: black; border: 1px solid #CCCCCC">Действие</th>
                    </tr>
                   
                    <?php foreach ($cartItems as $item): ?>
                        <tr class = "table_data">
                            <td style = "border: 1px solid #CCCCCC; text-align: center"><?= Html::img("{$item->getProduct()->imglink}", ['width' => 120]) ?></td>
                            <td style = "border: 1px solid #CCCCCC; text-align: center"><?= $item->getProduct()->title ?></td>
                            <td style = "text-align: left; border: 1px solid #CCCCCC"><?= $item->getProduct()->description ?></td>
                            <td style = "border: 1px solid #CCCCCC;"><?= $item->getProduct()->cpfc ?></td>
                            <td style = "border: 1px solid #CCCCCC; text-align: center; width: 120px"><?= $item->getProduct()->parameter ?></td>
                            <td style = "border: 1px solid #CCCCCC; text-align: center; width: 80px"><?= $item->getPrice() . " ₽" ?></td>
                            <td style = "border: 1px solid #CCCCCC; text-align: center">
                                <button class = "plus_minus_button"><a href = "<?= Url::to(['site/change', 'id' => $item->getProduct()->id, 'qty' => -1])?>" class = "plus_minus_text">-</a></button>
                                <?= $item->getQuantity()?>
                                <button class = "plus_minus_button"><a href = "<?= Url::to(['site/change', 'id' => $item->getProduct()->id, 'qty' => 1])?>" class = "plus_minus_text">+</a></button>
                            </td>
                            <td style = "border: 1px solid #CCCCCC; text-align: center; width: 80px"><?= $item->getCost() . " ₽" ?></td>
                            <td style = "border: 1px solid #CCCCCC; text-align: center; font-weight: bold"><a href = "<?= Url::to(['site/remove', 'id' => $item->getId()])?>">Удалить</a></td>
                        </tr>
                    <?php endforeach; ?>  
                    
                    <tr>
                        <td style = "color: #E8AB84; font-weight: bold; width: 150px;">Итоговое кол-во: <?= $cart->getTotalCount() ?></td>
                    </tr>
                    <tr>
                        <td style = "color: #E8AB84; font-weight: bold; width: 190px">Итоговая сумма: <?= $cart->getTotalCost() . " ₽" ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </body>
            </table>
        </div>

        <div class = "order_big_block">
            <div class = "order_block">
                <div class = "order_block_header_text">Оформление заказа</div>
                <?php
                    $form = ActiveForm::begin([
                        'id' => 'myform',
                        'method' => 'post',
                        'fieldConfig' => [
                            'template' => '{label}<span style = "color: red"> *</span>{input}<span class = "help-block-basket">{error}</span>',
                        ],
                    ]);

                        echo $form->field($model, 'fio')->textInput(['placeholder' => 'Иванов И.И', 'maxlength' => 30]);
                        echo $form->field($model, 'phone')->textInput(['placeholder' => '+7 (111) 111-11-11']);
                        echo $form->field($model, 'mail')->input('mail')->textInput();
                        
                        echo $form->field($model, 'address')->textInput();
                        echo $form->field($model, 'dop_info', ['template' => '{label}{input}<span class = "help-block-basket">{error}</span>'])->textarea();
                        echo $form->field($model, 'operator', ['template' => '{label}{input}{error}'])->checkbox(['value' => '1'])->label('');
                        echo Html::submitButton('ЗАКАЗАТЬ', ['class' => 'btn btn-success', 'name' => 'order-button', 'style' => 'margin-left: 50px; margin-top: 40px']);
                    ActiveForm::end();
                ?>
            </div>
        </div>
    <?php else: ?>
        <a href = "<?= Url::to(['site/fullmenu']) ?>"><div class = "basket_zero">Кликните здесь, чтобы перейти в меню и выбрать товар</div></a>
    <?php endif; ?>
</div>

<script src = "https://api-maps.yandex.ru/2.1?apikey=51785512-ffbb-44c5-9044-7f1ab310d38e&lang=ru_RU" type = "text/javascript"></script>
<script src = "script.js"></script>
<style>
/*Корзина*/
    .site-basket{
   font-size: 20px;
    margin-bottom: 100px;
    margin-top: 50px;
    }
#basket_table {
    margin-top: -50px
}

.basket_name {
    position: relative; 
    color: #E8AB84; 
    font-weight: bold; 
    font-size: 50px; 
    top: 10px
}

.basket_zero {
    position: relative;
    color: black; 
    bottom: 30px; 
    font-size: 18px;
    font-weight: bold;
    height: 160px;
    margin-top: 50px;
}

.basket_zero:hover {
    color: #AE7151;
}

.empty_basket_button {
    margin-top: 30px;
    float: right;
    background: #DC9669;
    border: none;
    color: white;
    cursor: pointer;
    width: 150px;
    height: 35px;
    font-weight: bold;
    font-size: 12px;
    border-radius: 6px;
}

.empty_basket_button:hover {
    background: white;
    border: 2px #DC9669 solid;
    color: #DC9669;
}

.order_big_block {
    height: 1300px
}

.order_block {
    position: relative;
    margin-top: -100px;
    height: 1130px;
    top: 130px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, .4);
    border-radius: 5px;
    font-size: 18px;
}

.order_block_header_text {
    text-align: center;
    width: 800px;
    position: relative;
    color: black;
    font-size: 25px;
    font-weight: bold;
    left: 170px;
    top: 60px;
}

.help-block-basket {
    position: absolute;
    left: 50px; 
    font-size: 18px;
    text-align: justify;
}

#clientorderform-fio {
    width: 1040px;
    height: 45px;
    margin-left: 50px;
    font-size: 18px;
}

label[for=clientorderform-fio] {
    margin-left: 50px;
    margin-top: 95px
}

.plus_minus_button {
    background-color: white;
    border: 1px solid #DC9669;
    border-radius: 2px;
}

#clientorderform-phone {
    width: 1040px;
    height: 45px;
    margin-left: 50px;
    font-size: 18px;
}

label[for=clientorderform-phone] {
    margin-left: 50px;
    margin-top: 40px
}

#clientorderform-mail {
    width: 1040px;
    height: 45px;
    margin-left: 50px;
    font-size: 18px;
}

label[for=clientorderform-mail] {
    margin-left: 50px;
    margin-top: 40px
}

#clientorderform-delivery_date {
    width: 963px;
    height: 45px;
    font-size: 18px;
}

label[for=clientorderform-delivery_date] {
    margin-left: 50px;
    margin-top: 40px
}

#clientorderform-delivery_date-datetime {
    margin-left: 50px;
}

#clientorderform-address {
    width: 1040px;
    height: 45px;
    margin-left: 50px;
    font-size: 18px;
}

label[for=clientorderform-address] {
    margin-left: 50px;
    margin-top: 40px
}

#clientorderform-dop_info {
    width: 1040px;
    height: 100px;
    margin-left: 50px;
    font-size: 18px;
}

label[for=clientorderform-dop_info] {
    margin-left: 50px;
    margin-top: 40px
}

label[for=clientorderform-operator] {
    margin-left: 50px;
    margin-top: 40px;
}

.order_today {
    position: relative;
    font-weight: bold;
    bottom: 6px;
    margin-left: 195px;
}

.plus_minus_button:hover {
    background-color: #DC9669;
}

.plus_minus_text:hover {
    color: white;
}

.count_cart_user {
    font-size: 10px;
    position: fixed;
    margin-left: 589px;
    margin-top: -42px;
    width: 21px;
    height: 21px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 100%;
    color: #E8AB84;
    background-color: black;
    border: 1px solid #E8AB84;
    z-index: 1;
}
    .jumbotron {
    text-align: center;
    background-color: transparent;
    margin-top: 50px;
        margin-bottom: 100px;
}

.jumbotron .btn {
    font-size: 21px;
    padding: 14px 24px;
}
</style>