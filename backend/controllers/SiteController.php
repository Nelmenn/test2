<?php

namespace backend\controllers;

use yii\views\site;
use yii\views\layouts;
use yii\web\AdminLteAsset;
use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionLogin()
	{
		return $this->render(login);
	}

	public function actionContent()
	{
		return $this->render(content);
	}


}
