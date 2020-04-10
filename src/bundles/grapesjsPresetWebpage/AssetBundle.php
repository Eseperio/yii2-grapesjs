<?php

namespace JCIT\src\bundles\grapesjsPresetWebpage;

use JCIT\bundles\GrapesJsPluginAssetBundle;

/**
 * Class AssetBundle
 * @package JCIT\src\bundles\grapesjsPresetWebpage
 */
class AssetBundle extends GrapesJsPluginAssetBundle
{
    /**
     * @var array
     */
    public $css = [
        'grapesjs-preset-webpage.min.css',
    ];

    /**
     * @var string
     */
    public $grapesJsPluginName = 'grapesjs-newsletter';

    /**
     * @var array
     */
    public $js = [
        'grapesjs-preset-webpage-min.js',
    ];

    /**
     * @var string
     */
    public $sourcePath = '@vendor/npm-asset/grapesjs-preset-webpage/dist';
}