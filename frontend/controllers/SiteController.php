<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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

    /**
     * @inheritdoc
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

    public function actionIndex()
    {
        $this->layout = "landing";
        return $this->render('index');
    }

    public  function actionPartenerUnap()
    {
        $this->layout = "parteneri";
        return $this->render('partener-unap');
    }

    public function actionPartenerMeteo()
    {
        $this->layout = "parteneri";
        return $this->render('partener-meteo');
    }

    public function actionPartenerAscendia()
    {
        $this->layout = "parteneri";
        return $this->render('partener-ascendia');
    }

    public function actionPartenerAdl()
    {
        $this->layout = "parteneri";
        return $this->render('partener-adl');
    }

    public function  actionDescriereProiect()
    {
        return $this->render('descriere-proiect');
    }

    public  function actionDetaliiEtapa1()
    {
        return $this->render('detalii-etapa-1');
    }

    public  function actionDetaliiEtapa2()
    {
        return $this->render('detalii-etapa-2');
    }

    public  function actionDetaliiEtapa3()
    {
        return $this->render('detalii-etapa-3');
    }

    public function actionListaDePersonal()
    {
        return $this->render('lista-de-personal');
    }

    public  function actionResurse()
    {
        return $this->render('resurse');
    }
    
    public function actionInstrumenteSiMetode()
    {
        return $this->render('instrumente-si-metode');
    }

    public  function  actionConferinte()
    {
        return $this->render('conferinte');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

}
