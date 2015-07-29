<?php
/**
 * @link http://www.yiiassets.com
 * @copyright Copyright (c) 2015 Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
namespace prawee\metroui\assets;

use yii\web\AssetBundle;


/**
 * Asset bundel for the Metro UI css,js files.
 * @author Prawee Wongsa <konkeanweb@gmail.com
 * @since 1.0
 */
class MetroUiAsset extends AssetBundle{
    public $sourcePath='@bower/metro-ui-css';
    public $css=[
        'build/css/metro.min.css',
        'build/css/metro-icons.min.css',
        'build/css/metro-responsive.min.css',
        'build/css/metro-schemes.min.css',
        'docs/css/docs.css',
    ];
    public $js=[
        'build/js/metro.min.js',
        'docs/js/docs.js',
        'docs/js/prettify/prettify.js',
    ];
    public $depends=[
        'yii\web\YiiAsset',
    ];
}