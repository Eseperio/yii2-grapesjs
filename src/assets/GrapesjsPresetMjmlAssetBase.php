<?php

namespace eseperio\grapesjs\assets;


/**
 * Class AssetBundle
 * @package eseperio\grapesjs\assets\GrapesjsPresetMjml
 */
class GrapesjsPresetMjmlAssetBase extends GrapesJsPluginAssetBase
{
    /**
     * @var string
     */
    public $grapesJsPluginName = 'grapesjs-mjml';

    /**
     * @var array
     */
    public $js = [
        'https://unpkg.com/grapesjs-mjml@0.1.15/dist/grapesjs-mjml.min.js',
    ];

}
