<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\SpResgistrarReservas;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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

    // public function actionIndex()
    // {
    //     return $this->render('index');
    // }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

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

    public function actionAbout()
    {
        return $this->render('about');
    }


    /* Nuevas */

    public function actionIndex()
    {
        $this->layout="main_uno";
        return $this->render('index');
    }

    public function actionHabitacion1()
    {
        $this->layout="main_dos";
        return $this->render('habitacion1');
    }

    public function actionCarrito()
    {
        $this->layout="main_dos";
        return $this->render('carrito');
    }

    public function actionRegistrarreserva(){
        //$c1: codigo del cliente
        //$c2: codigo del cliente
        //$c3: nombre completo del clinete
        //$c4: direccion del cliente
        //$c5: correo electronico del cliente
        //$c6: telefono del cliente
        //
        $c1 = $_GET['hab_cod'];
        $c2 = $_GET['desde'];
        $c3 = $_GET['hasta'];
        $c4 = $_GET['adultos'];
        $c5 = $_GET['ninos'];

        $fn_registro = new SpResgistrarReservas();
        $resultado = $fn_registro->registrar($c1,$c2,$c3,$c4,$c5);

        echo $resultado;
    }

}
