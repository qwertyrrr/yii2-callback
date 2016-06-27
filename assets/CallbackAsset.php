<?php

namespace qwertyrrr\callback\assets;

use yii\web\AssetBundle;

class CallbackAsset extends AssetBundle
{
	public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
	public $js = [
		'js/callback.js'
	];
	public $css = [
		'css/callback.css'
	];

	public function init()
    {
        $this->sourcePath = dirname(__DIR__).'/web';
        parent::init();
    }

}