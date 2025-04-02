Below is an improved README that explains the widget, its presets, and configuration options clearly.

```markdown
# GrapesJS Implementation for Yii2

This extension integrates GrapesJS into Yii2, offering flexible widgets and bundles to facilitate HTML content editing. It supports multiple presets for email, MJML, and web page configurations.

## Installation

Install via Composer:

```bash
composer require jc-it/yii2-grapesjs
```

Alternatively, add the package to your `composer.json` file:

```json
"jc-it/yii2-grapesjs": "^<latest version>"
```

Then run:

```bash
composer update
```

## Usage

Include the widget in your view file. By default, the widget renders a container and initializes GrapesJS with the specified client options.

Example:

```php
<?= \eseperio\grapesjs\widgets\GrapesJsWidget::widget([
    // HTML options for the container
    'options' => [
        'id' => 'grapesjs-editor',
        'tag' => 'div'
    ],
    // GrapesJS client configuration (can override default options)
    'clientOptions' => [
        // Additional configuration such as plugins or panel settings
    ],
    // Choose one of the available presets: 'web', 'email', or 'mlml'
    'preset' => \eseperio\grapesjs\widgets\GrapesJsWidget::PRESET_WEB,
]) ?>
```

## Widget Configuration

The widget mainly accepts the following properties:

- **options**: HTML attributes for the container element.  
  Default tag is `div`.
- **clientOptions**: Options passed to GrapesJS during initialization.  
  The widget automatically adds the container identifier and the names of plugins based on the selected preset.
- **preset**: Determines the set of GrapesJS plugins loaded. Available presets are:
    - `web` &mdash; For general web page editing.
    - `email` &mdash; For designing email templates (loads the newsletter preset).
    - `mlml` &mdash; For preparing MJML templates.

You can also extend or override the presets by merging additional asset bundles into the `presets` property.

## How It Works

The widget:

1. Merges default presets with any custom configurations.
2. Initializes asset bundles based on the selected preset.
3. Renders the container element specified in `options`.
4. Registers necessary JavaScript and CSS assets for GrapesJS as well as the preset plugins.
5. Calls `grapes.init` with the merged client options to initialize the editor.

## License

The MIT License (MIT). Please see the [LICENSE](https://github.com/jc-it/yii2-grapesjs/blob/master/LICENSE) for more details.
```
