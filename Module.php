<?php

namespace qwertyrrr\callback;

use yii;

class Module extends \yii\base\Module
{
	public $adminRoles = ['admin', 'superadmin'];
	/* Delivery settings */
	public $email = null;
	public $subject = 'Callback requested';
	public $mailTemplate = '/mails/callbackMail';
	
	/* View settigns */
	public $formTitle = "Заказать звонок";
	public $nameTitle = "Ваше имя:";
	public $namePlaceholder = "Анатолий";
	public $phoneTitle = "Ваш телефон:";
	public $phonePlaceholder = "88005553535";
	public $messageTitle = "Сообщение:";
	public $messagePlaceholder = "Текст...";
	public $timeTitle = "Время для звонка: ";
	public $times = [
		'10:30-12:30' => '10:30-12:30',
		'14:00-18:30' => '14:00-18:30',
	];
	public $buttonTitle = "Отправить";

	/* validation settings */
	public $requireMessage = "Заполните поле {attribute}";
	
	public function init()
	{
		parent::init();

		return true;
	}
}