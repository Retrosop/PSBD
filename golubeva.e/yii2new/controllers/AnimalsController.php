<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Animals;

class AnimalsController extends Controller {
   public function actionList() {
      $query = Animals::find();

      $pagination = new Pagination([
         'defaultPageSize' => 5, // количество записей на странице
         'totalCount' => $query->count(), // количество записей в таблице
      ]);

      $animals = $query->orderBy('name')
         ->offset($pagination->offset) // отступ постраничной навигации
         ->limit($pagination->limit) // ограничение размера выборки
         ->all();

      return $this->render('list', [
         'animals' => $animals,
         'pagination' => $pagination,
      ]);
   }
}