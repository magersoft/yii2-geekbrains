<?php
/**
 * Created by PhpStorm.
 * User: mager
 * Date: 09.10.2018
 * Time: 20:52
 */

namespace app\controllers;


use app\models\ContactForm;
use app\models\Task;
use app\models\Test;
use yii\web\Controller;

class TaskController extends Controller
{
	//public $layout = 'my';

	public function actionIndex()
	{
		//var_dump(\Yii::$app->request->get('id'));

		$model = new Test();

		//var_dump($model);

		//$model->title = '123123123';

		return $this->render('index', [
			'title' => 'Yii2 Framework',
			'content' => 'Lesson 1'
		]);
	}

	/*
	 * /index.php?r=task%2Fhello
	 */
	public function actionHello()
	{
		$model = new Task();
		$model->hello = 'Privet';

		var_dump($model->validate());
		var_dump($model->getErrors());

		return $this->render('index', ['hello' => 'Hello World', 'text' => 'Это экшен с приветствием для ДЗ']);
	}
}