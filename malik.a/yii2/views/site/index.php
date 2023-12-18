<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Мебельная фабрика МЕБАРИЯ';

?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Добро пожаловать на нашу фабрику мебели!</h1>
        <p class="lead">Исследуйте наши коллекции мебели высокого качества для вашего дома.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="col-lg-12 custom-card">
                    <h2>Наша история</h2>
                    <p>Узнайте историю нашей фабрики мебели и наше стремление к высококачественному ремеслу.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="col-lg-12 custom-card">
                    <h2>Популярные товары</h2>
                    <p>Исследуйте наши последние и самые популярные коллекции мебели.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="col-lg-12 custom-card">
                    <h2>Свяжитесь с нами</h2>
                    <p>Есть вопросы или запросы на заказ? Свяжитесь с нашей командой.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Добавленные стили */
    .custom-card {
        background: rgba(255, 255, 255, 0.7);
        border-radius: 10px;
        text-align: center;
        padding: 15px;
        box-sizing: border-box;
        overflow: auto; /* Добавлен стиль для прокрутки, если контент не помещается */
    }
</style>
