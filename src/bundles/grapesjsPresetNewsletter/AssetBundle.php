<?php

namespace JCIT\src\bundles\grapesjsPresetNewsletter;

use JCIT\bundles\GrapesJsPluginAssetBundle;

/**
 * Class AssetBundle
 * @package JCIT\src\bundles\grapesjsPresetNewsletter
 */
class AssetBundle extends GrapesJsPluginAssetBundle
{
    /**
     * @var array
     */
    public $css = [
        'grapesjs-preset-newsletter.min.css',
    ];

    /**
     * @var string
     */
    public $grapesJsPluginName = 'grapesjs-newsletter';

    /**
     * @var array
     */
    public $js = [
        'grapesjs-preset-newsletter-min.js',
    ];

    /**
     * @var string
     */
    public $sourcePath = '@vendor/npm-asset/grapesjs-preset-newsletter/dist';
}