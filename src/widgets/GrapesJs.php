<?php

namespace JCIT\widgets;

use JCIT\bundles\GrapesJsPluginAssetBundle;
use JCIT\src\bundles\grapesjs\AssetBundle;
use JCIT\src\bundles\grapesjsPresetMjml\AssetBundle as MjmlPresetAssetBundle;
use JCIT\src\bundles\grapesjsPresetNewsletter\AssetBundle as NewsletterPresetAssetBundle;
use JCIT\src\bundles\grapesjsPresetWebpage\AssetBundle as WebpagePresetAssetBundle;
use yii\base\Widget;
use yii\di\Instance;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Class GrapesJs
 * @package JCIT\widgets
 */
class GrapesJs extends Widget
{
    const PRESET_WEB = 'web';
    const PRESET_EMAIL = 'email';
    const PRESET_MJML = 'mlml';

    /**
     * @var array
     */
    public $clientOptions = [];

    /**
     * @var array
     */
    public $options = [];

    /**
     * Configurations or class strings of the plugins to be loaded
     *
     * @var GrapesJsPluginAssetBundle[]
     */
    protected $pluginAssetBundles = [];

    /**
     * @var string
     */
    public $preset = self::PRESET_WEB;

    /**
     * Map of preset name to bundles
     *
     * @var array
     */
    public $presets = [];

    public function init()
    {
        $this->presets = ArrayHelper::merge(
            [
                self::PRESET_EMAIL => [NewsletterPresetAssetBundle::class],
                self::PRESET_MJML => [MjmlPresetAssetBundle::class],
                self::PRESET_WEB => [WebpagePresetAssetBundle::class],
            ],
            $this->presets
        );
        $this->pluginAssetBundles = ArrayHelper::getValue($this->presets, $this->preset, []);

        foreach ($this->pluginAssetBundles as $key => $pluginAssetBundle) {
            $this->pluginAssetBundles[$key] = Instance::ensure($pluginAssetBundle, GrapesJsPluginAssetBundle::class);
        }

        $this->setId(ArrayHelper::getValue($this->options, 'id'));
        $this->options['id'] = $this->getId();

        parent::init();
    }

    protected function registerPlugin(): void
    {
        $view = $this->getView();
        $view->registerAssetBundle(AssetBundle::class);

        foreach ($this->pluginAssetBundles as $pluginAssetBundle) {
            $view->registerAssetBundle($pluginAssetBundle);
        }
    }

    /**
     * @return string
     */
    public function run(): string
    {
        parent::run();

        $this->registerPlugin();
        $tag = ArrayHelper::remove($this->options, 'tag', 'div');

        $clientOptions = ArrayHelper::merge(
            [
                'container' => '#' . $this->id,
                'plugins' => array_map(function(GrapesJsPluginAssetBundle $pluginAssetBundle) {return $pluginAssetBundle->grapesJsPluginName;}, $this->pluginAssetBundles),
            ],
            $this->clientOptions
        );

        $encodedClientOptions = Json::encode($clientOptions);
        $this->view->registerJs(<<<JS
grapes.init($encodedClientOptions);
JS
        );
        return Html::tag($tag, '', $this->options);
    }
}
