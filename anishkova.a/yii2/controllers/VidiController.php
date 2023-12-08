<?php

namespace app\controllers;

use app\models\Vidi;
use app\models\VidiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VidiController implements the CRUD actions for Vidi model.
 */
class VidiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Vidi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new VidiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Vidi model.
     * @param int $idvidi Idvidi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idvidi)
    {	$abc='HELLO WORLD';
        return $this->render('view', [
            'model' => $this->findModel($idvidi),
			'abcd'=>'12345',
			'abc'=>$abc
        ]);
    }

    /**
     * Creates a new Vidi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Vidi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idvidi' => $model->idvidi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Vidi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idvidi Idvidi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idvidi)
    {
        $model = $this->findModel($idvidi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idvidi' => $model->idvidi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Vidi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idvidi Idvidi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idvidi)
    {
        $this->findModel($idvidi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Vidi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idvidi Idvidi
     * @return Vidi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idvidi)
    {
        if (($model = Vidi::findOne(['idvidi' => $idvidi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
