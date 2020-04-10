<?php

namespace JCIT\src\bundles\grapesjs;

use yii\web\AssetBundle as YiiAssetBundle;

/**
 * Class AssetBundle
 * @package JCIT\src\bundles\grapesjs
 */
class AssetBundle extends YiiAssetBundle
{
    /**
     * @var array
     */
    public $css = [
        'grapes.min.css',
    ];

    /**
     * @var array
     */
    public $js = [
        YII_ENV_DEV ? 'grapes.js' : 'grapes.min.js',
    ];

    /**
     * @var string
     */
    public $sourcePath = '@vendor/npm-asset/grapesjs/dist';
}