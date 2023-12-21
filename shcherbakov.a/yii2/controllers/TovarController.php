<?php

namespace app\controllers;

use app\models\Tovar;
use app\models\TovarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TovarController implements the CRUD actions for Tovar model.
 */
class TovarController extends Controller
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
     * Lists all Tovar models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TovarSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tovar model.
     * @param int $id_works Id Works
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_works)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_works),
        ]);
    }

    /**
     * Creates a new Tovar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tovar();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_works' => $model->id_works]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tovar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_works Id Works
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_works)
    {
        $model = $this->findModel($id_works);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_works' => $model->id_works]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tovar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_works Id Works
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_works)
    {
        $this->findModel($id_works)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tovar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_works Id Works
     * @return Tovar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_works)
    {
        if (($model = Tovar::findOne(['id_works' => $id_works])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
