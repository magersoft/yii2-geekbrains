<?php
/**
 * Created by PhpStorm.
 * User: mager
 * Date: 09.10.2018
 * Time: 21:44
 */

namespace app\models;


use yii\base\Model;

class Test extends Model
{
	public $title;
	public $content;

	public function rules() {
		return [
			[['title'], 'myValidate']
		];
	}

	public function myValidate($attribute, $params)
	{
		if ($this->$attribute != 'test') {
			$this->addError($attribute, 'По пизде пошло');
		}
	}
}