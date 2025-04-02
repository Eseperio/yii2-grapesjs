<?php

namespace eseperio\grapesjs\assets;


/**
 * Class AssetBundle
 * @package eseperio\grapesjs\assets\GrapesjsPresetWebpage
 */
class GrapesjsPresetWebpageAssetBase extends GrapesJsPluginAssetBase
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
