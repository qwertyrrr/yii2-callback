<?php

namespace qwertyrrr\callback\widgets;

use yii\helpers\Html;
use yii\helpers\Url;
use Yii;

class Callbackform extends \yii\base\Widget
{

	public function init()
	{
		\qwertyrrr\callback\assets\CallbackAsset::register($this->getView());
	}

	public function run()
	{
		
		
		return $this->render('callbackform');
	}
}