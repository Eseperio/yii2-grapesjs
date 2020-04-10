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
        'grapesjs-mjml.min.js',
    ];

    /**
     * @var string
     */
    public $sourcePath = '@vendor/npm-asset/grapesjs-mjml/dist';
}