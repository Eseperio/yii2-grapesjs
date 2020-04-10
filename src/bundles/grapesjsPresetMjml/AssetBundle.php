<?php

namespace JCIT\src\bundles\grapesjsPresetMjml;

use JCIT\bundles\GrapesJsPluginAssetBundle;

/**
 * Class AssetBundle
 * @package JCIT\src\bundles\grapesjsPresetMjml
 */
class AssetBundle extends GrapesJsPluginAssetBundle
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