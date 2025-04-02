<?php

namespace eseperio\grapesjs\widgets;

use eseperio\grapesjs\assets\GrapesJsAsset;
use eseperio\grapesjs\assets\GrapesJsPluginAssetBase;
use eseperio\grapesjs\assets\GrapesjsPresetMjmlAssetBase as MjmlPresetAssetBundle;
use eseperio\grapesjs\assets\GrapesjsPresetNewsletterAssetBase as NewsletterPresetAssetBundle;
use eseperio\grapesjs\assets\GrapesjsPresetWebpageAssetBase as WebpagePresetAssetBundle;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * GrapesJs widget.
 */
class GrapesJsWidget extends Widget
{
    const PRESET_WEB = 'web';
    const PRESET_EMAIL = 'email';
    const PRESET_MJML = 'mjml';

    /**
     * @var array Client options for grapes.js initialization.
     */
    public $clientOptions = [];

    /**
     * @var array HTML options for the widget container.
     */
    public $options = [];

    /**
     * @var string The preset to use.
     */
    public $preset = self::PRESET_WEB;

    /**
     * Fixed mapping of presets to asset bundle class names.
     *
     * @var array
     */
    private static $presetAssetBundles = [
        self::PRESET_EMAIL => [NewsletterPresetAssetBundle::class],
        self::PRESET_MJML  => [MjmlPresetAssetBundle::class],
        self::PRESET_WEB   => [WebpagePresetAssetBundle::class],
    ];

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();

        // Ensure the widget has an ID
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    /**
     * Registers the required asset bundles and returns the plugin names.
     *
     * @return array List of grapes.js plugin names.
     * @throws \yii\base\InvalidConfigException
     */
    protected function registerAssets(): array
    {
        $view = $this->getView();
        // Register the main GrapesJs asset bundle.
        $view->registerAssetBundle(GrapesJsAsset::class);

        $pluginNames = [];
        // Get plugin asset bundle classes for the current preset.
        $pluginBundles = ArrayHelper::getValue(self::$presetAssetBundles, $this->preset, []);
        foreach ($pluginBundles as $bundleClass) {
            /* @var GrapesJsPluginAssetBase $asset */
            $asset = $view->registerAssetBundle($bundleClass);
            $pluginNames[] = $asset->grapesJsPluginName;
        }
        return $pluginNames;
    }

    /**
     * Runs the widget.
     *
     * @return string The widget output.
     * @throws \yii\base\InvalidConfigException
     */
    public function run(): string
    {
        $pluginNames = $this->registerAssets();

        // Merge client options with default container and plugins.
        $clientOptions = ArrayHelper::merge(
            [
                'container' => '#' . $this->options['id'],
                'plugins'   => $pluginNames,
            ],
            $this->clientOptions
        );

        $this->getView()->registerJs("grapesjs.init(" . Json::encode($clientOptions) . ");");

        $tag = ArrayHelper::remove($this->options, 'tag', 'div');

        return Html::tag($tag, '', $this->options);
    }
}
