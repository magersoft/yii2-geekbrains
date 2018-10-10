<?php
/**
 * Created by PhpStorm.
 * User: mager
 * Date: 10.10.2018
 * Time: 19:36
 */

namespace app\models;


use yii\base\Model;

class Task extends Model
{
	public $hello;
	public $test;

	public function rules()
	{
		return [
			[['hello'], 'helloValidator']
		];
	}

	public function helloValidator($attribute, $params)
	{
		if ($this->$attribute != 'Hello World') {
			$this->addError($attribute, 'Это совсем не приветствие');
		}
	}
}