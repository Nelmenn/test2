<?php

namespace frontend\controllers;

use app\frontend\models\SignUp;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

use yii\filters\AccessControl;

use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;


/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionCategory()
    {
        return $this->render('category');
    }
    public function actionSignUp()
    {
        $model = new SignUp();
        return $this->render('signup', ['model'=>$model]);
    }
}
