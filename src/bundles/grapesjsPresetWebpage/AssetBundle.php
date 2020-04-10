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
        'https://unpkg.com/grapesjs-preset-webpage@0.1.11/dist/grapesjs-preset-webpage.min.css',
    ];

    /**
     * @var string
     */
    public $grapesJsPluginName = 'grapesjs-newsletter';

    /**
     * @var array
     */
    public $js = [
        'https://unpkg.com/grapesjs-preset-webpage@0.1.11/dist/grapesjs-preset-webpage-min.js',
    ];
}