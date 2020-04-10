<?php

namespace JCIT\bundles;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * Class GrapesJsPluginAssetBundle
 * @package JCIT\bundles
 */
abstract class GrapesJsPluginAssetBundle extends AssetBundle
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
