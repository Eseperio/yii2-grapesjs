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
        'https://unpkg.com/browse/grapesjs-preset-newsletter@0.2.20/dist/grapesjs-preset-newsletter.css',
    ];

    /**
     * @var string
     */
    public $grapesJsPluginName = 'grapesjs-newsletter';

    /**
     * @var array
     */
    public $js = [
        'https://unpkg.com/browse/grapesjs-preset-newsletter@0.2.20/dist/grapesjs-preset-newsletter-min.js',
    ];
}