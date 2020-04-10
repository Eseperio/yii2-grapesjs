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
        'https://unpkg.com/grapesjs/dist/css/grapes.min.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'https://unpkg.com/grapesjs',
    ];
}