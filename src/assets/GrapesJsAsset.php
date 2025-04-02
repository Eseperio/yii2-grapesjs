<?php

namespace eseperio\grapesjs\assets;

use yii\web\AssetBundle as YiiAssetBundle;

/**
 * Class AssetBundle
 * @package eseperio\grapesjs\assets\Grapesjs
 */
class GrapesJsAsset extends YiiAssetBundle
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
