<?php
// app\controllers\WorksApiController.php

namespace app\controllers;

use yii\rest\ActiveController;
use app\models\Works;
use yii\web\Response;

class WorksApiController extends ActiveController
{   
    public $modelClass = 'app\models\Works';
    public function actionCreate()
	{
		$model = new Works();

		$model->load(Yii::$app->getRequest()->getBodyParams(), '');

		if ($model->save()) {
			Yii::$app->getResponse()->setStatusCode(201);  // Устанавливаем код статуса 201 Created
			return $model;
		} elseif (!$model->hasErrors()) {
			throw new ServerErrorHttpException('Failed to create the object for unknown reason.');
		}

		return $model;
	}
	
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);
		
		$model->load(Yii::$app->getRequest()->getBodyParams(), '');

		if ($model->save()) {
			return $model;
		} elseif (!$model->hasErrors()) {
			throw new ServerErrorHttpException('Failed to update the object for unknown reason.');
		}

		return $model;
	}

	public function actionDelete($id)
	{
		$model = $this->findModel($id);
		$model->delete();

		Yii::$app->getResponse()->setStatusCode(204);  // Устанавливаем код статуса 204 No Content
	}
}
 