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
		'common/modules/callback/web/js/callback.js'
	];
	public $css = [
		'common/modules/callback/web/css/callback.css'
	];

}