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
    public $sourcePath='@bower/metro-ui-css/build';
    public $css=[
        'css/metro.min.css',
        'css/metro-icons.min.css',
        'css/metro-responsive.min.css',
    ];
    public $js=[
        'js/metro.min.js',
    ];
    public $depends=[
        'yii\web\YiiAsset',
    ];
}