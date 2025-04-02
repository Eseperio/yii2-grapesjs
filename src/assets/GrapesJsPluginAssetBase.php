<?php

namespace eseperio\grapesjs\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * Class GrapesJsPluginAssetBundle
 * @package eseperio\grapesjs\assets
 */
abstract class GrapesJsPluginAssetBase extends AssetBundle
{
    /**
     * String that represents the name how the plugin should be loaded into GrapesJS
     *
     * @var string
     */
    public $grapesJsPluginName;

    public function init()
    {
        if (empty($this->grapesJsPluginName) || !is_string($this->grapesJsPluginName)) {
            throw new InvalidConfigException('GrapesJsPlugin name must be set and must be a string.');
        }
        parent::init();
    }
}
