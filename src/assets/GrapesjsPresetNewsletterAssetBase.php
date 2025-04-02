<?php

namespace eseperio\grapesjs\assets;


/**
 * Class AssetBundle
 * @package eseperio\grapesjs\assets\GrapesjsPresetNewsletter
 */
class GrapesjsPresetNewsletterAssetBase extends GrapesJsPluginAssetBase
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
