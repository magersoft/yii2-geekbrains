<?php
/**
 * Created by PhpStorm.
 * User: mager
 * Date: 09.10.2018
 * Time: 20:52
 */

namespace app\controllers;


use app\models\ContactForm;
use app\models\tables\Users;
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

	public function actionTest()
	{
//		\Yii::$app->db->createCommand("
//			insert into test(title, content, created) VALUES
//			('title1', 'content1', NOW()),
//			('title2', 'content2', NOW()),
//			('title3', 'content3', NOW())
//		")->execute();

//		$id = 1;
//		$res = \Yii::$app->db->createCommand("
//			select * from test WHERE id = :id
//		")->bindParam(':id', $id)->queryOne();

		/** @var $user
	     * Create
		 */
//		$user = new Users();
//
//		$user->login = 'Adolf';
//		$user->password = md5('1488');
//		$user->role = 1;
//
//		$user->save();

		/*
		 * Read
		 */
//		$user = Users::findOne(1);

		// insert
//		$user->isNewRecord = true;
//		$user->id = null;
//		$user->login = 'aaaadmin1488';
//		$user->save();


		// update
//		$user->login = 'aaaadmin';
//		$user->save();

		/*
		 * Delete
		 */
//		$user = Users::findOne(1);
//		$user->delete();

		// Logic delete
		//Users::deleteAll(['login' => 'admin']);

		//--------------------------------------------------------

		var_dump(Users::find());

		exit;
	}
}