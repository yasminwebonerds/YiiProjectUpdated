<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
    ];
    public $js = [
    'js/jquery.min.js',
    'js/jquery.dropotron.min.js',
    'js/jquery.scrolly.min.js',
    'js/jquery.onvisible.min.js',
    'js/skel.min.js',
    'js/util.js',
    'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
