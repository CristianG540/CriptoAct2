<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

class CustomAssets extends AssetBundle
{
    public $sourcePath = '@bower/';
    public $css = [
    ];
    public $js = [
        'underscore/underscore-min.js',
        'vue/dist/vue.js',
    ];
    public $depends = [
        '\yii\web\JqueryAsset'
    ];
}
