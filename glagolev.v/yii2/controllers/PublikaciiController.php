<?php

namespace app\controllers;

use app\models\Publikacii;
use app\models\PublikaciiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PublikaciiController implements the CRUD actions for Publikacii model.
 */
class PublikaciiController extends Controller
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
     * Lists all Publikacii models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PublikaciiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Publikacii model.
     * @param int $idpublikacii Idpublikacii
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idpublikacii)
    {
        return $this->render('view', [
            'model' => $this->findModel($idpublikacii),
        ]);
    }

    /**
     * Creates a new Publikacii model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Publikacii();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idpublikacii' => $model->idpublikacii]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Publikacii model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idpublikacii Idpublikacii
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idpublikacii)
    {
        $model = $this->findModel($idpublikacii);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idpublikacii' => $model->idpublikacii]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Publikacii model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idpublikacii Idpublikacii
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idpublikacii)
    {
        $this->findModel($idpublikacii)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Publikacii model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idpublikacii Idpublikacii
     * @return Publikacii the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idpublikacii)
    {
        if (($model = Publikacii::findOne(['idpublikacii' => $idpublikacii])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
