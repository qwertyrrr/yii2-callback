#yii2-callback#
Это модуль обратного звонка для Yii2 фреймворка. Он позволяет отправлять оповещения о запросах обратного звонка с формы в таблицу в базе данных и, при желании, на указанную в настройках модуля почту.
#Установка#
Выполнить команду  
`php composer require qwertyrrr/yii2-callback "*"`  
Или добавить в composer.json  
`"qwertyrrr/yii2-callback": "*",`  
И выполнить  
`php composer update`  
Далее, выполнить миграцию необходимых таблиц:  
`php yii migrate --migrationPath=vendor/qwertyrrr/yii2-callback/migrations`
#Подключение и настройка#
В конфигурационный файл приложения добавить модуль:  
```php
    'modules' => [  
        // other modules  
        'callback' => [  
            'class' => 'qwertyrrr\callback\Module\',  
            //module settings  
        ],  
        // other modules  
    ]  
```  
#Кастомизация модуля#
Вы можете кастомизировать модуль используя настройки ниже.  
* **Настройки рассылки:**  
* email - почта для информирования о новом запросе с формы, по умолчанию null - рассылка отключена.  
* subject - тема письма.  
* mailTemplate - расположение шаблона для письма, внутри доступна модель сохранненой записи через переменную $model.  
* **Настройки внешнего вида:**  
* formTitle - заголовок формы.  
* nameTitle - label для поля имени.  
* namePlaceholder - placeholder для поля имени.  
* phoneTitle - label для поля телефона.  
* phonePlaceholder - placeholder для поля телефона.  
* messageTitle - label для поля сообщения.  
* messagePlaceholder - placeholder для поля сообщения.  
* timeTitle - label для поля времени.  
* times - массив строк, промежутков времени доступных из выпадающего списка в форме.  
* buttonTitle - label для кнопки отправки формы.  
* **Настройка валидации:**  
* requireMessage - сообщение о необходимости заполнения поля, используйте {attribute} для вывода названия текущего поля.  
#Использование#
Для добавления на страницу кнопки отправки и формы добавьте в выбранном месте виджет:  
`<?= qwertyrrr\callback\widgets\callbackform::widget(); ?>`  
Для открытия модального окна формы с помощью других кнопок на форме, добавте им аттрибуты:  
`data-toggle="modal" data-target="#modal-callback"`