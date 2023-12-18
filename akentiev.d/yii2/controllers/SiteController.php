<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Works;
use yii\data\Pagination;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionMyactive($namediplom = '', $curatordiplom = '', $datediplom = '')
    {   
        $data = $namediplom;
        $data1 = $curatordiplom;
        $data2 = $datediplom;
        
        ////////////////////////////////////////////////////// Инъекции SQL
        $data = trim($data);
        $data1 = trim($data1);
        $data2 = trim($data2);

        $white = ["ALTER", "DATABASE", "BETWEEN", "CASE", "CHECK", "CREATE", "DATABASE", "INDEX", "REPLACE", "PROCEDURE", "UNIQUE", "VIEW", "DEFAULT", "DELETE", "DESC", "DISTINCT", "DROP", "COLUMN", "CONSTRAINT", "EXEC", "EXISTS", "FOREIGN", "FROM", "OUTER", "GROUP", "HAVING", "INNER", "INSERT", "JOIN", "LEFT", "LIKE", "LIMIT", "NOT", "NULL", "ORDER", "PRIMARY", "RIGHT", "ROW", "SELECT", "TABLE", "TRUNCATE", "UNION", "UPDATE", "VALUES", "WHERE"];
        foreach($white as $key) 
        {
            $b1 = [strtoupper($data), strtoupper($data1), strtoupper($data2)];
            if(str_contains($b1[0], $key) || str_contains($b1[1], $key) || str_contains($b1[2], $key)) $this->redirect('?r=site/myactive');
        }

        static $pattern = "/[!@#$&*.,?-_}{\/+\=\(\)\^\:\;\`\"\\\><|]/";
        if(preg_match($pattern, $data, $matches, PREG_OFFSET_CAPTURE) || preg_match($pattern, $data1, $matches, PREG_OFFSET_CAPTURE)) $this->redirect('?r=site/myactive');
        //////////////////////////////////////////////////////

        $query = Works::find();
        if(!empty($data)) $query->andWhere(['LIKE', 'name', '%'.$data.'%', false]);
        if(!empty($data1)) $query->andWhere(['LIKE', 'id_sotrudnik', '%'.$data1.'%', false]);
        if(!empty($data2)) $query->andWhere(['LIKE', 'datez', '%'.$data2.'%', false]);
                    
        $pagination = new Pagination(['PageSize' => 5,'totalCount'=> $query->count()]);
        
        $models = $query->offset($pagination->offset)->limit($pagination->limit)->all();

        \Yii::$app->getView()->params['namediplom'] = $data;
        \Yii::$app->getView()->params['curatordiplom'] = $data1;
        \Yii::$app->getView()->params['datediplom'] = $data2;
        
        return $this->render('myactive',['pages' => $pagination,'models'=> $models]);
    }
}