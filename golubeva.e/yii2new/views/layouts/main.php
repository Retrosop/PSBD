<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
$cart = \Yii::$app->cart;

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => 'French Bistro',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Главная страница', 'url' => ['/site/index']],
            ['label' => 'О нас', 'url' => ['/site/about']],
              ['label' => 'Меню', 'url' => ['/site/fullmenu']],
              ['label' => 'Корзина' . " (" . $cart->getTotalCount() . ")", 
                    'url' => ['/site/basket']],
            ['label' => 'Контакты', 'url' => ['/site/contact'],
                ],
            ['label' => 'Регистрация', 'url' => ['/site/registration']],
            Yii::$app->user->isGuest
                ? ['label' => 'Авторизация', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->isGuest . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<div class="footer">
<h6>8 (42622) 3-50-50</h6>
<h6>8-964-478-50-50</h6>
<h6>Россия, Биробиджан, Пионерская, 64/а</h6>
<h6>Режим работы:</h6>
<h6>Пн - Чт: с 12:00 до 00:00</h6>
<h6>Пт - Сб: с 12:00 до 02:00</h6>
<h6>Вс: с 12:00 до 00:00</h6>
    <h6>С понедельника по пятницу</h6> 
    <h6>Комплексные обеды с 12.00 до 16.00</h6>
<h6>Доставка: вс.-чт. до 22:00; пт.-сб. до 01:00.</h6>
            
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<style>
h6 {
    font-size: 15px;
    text-align: center;
    color: #FCF3F3;
}
.footer{
    background-color: #212529;
    width: 1535px;
    height: 500p;
}
    .header{
        
    }
</style>
