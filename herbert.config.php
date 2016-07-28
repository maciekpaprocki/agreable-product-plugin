<?php


return [

    /**
     * The Herbert version constraint.
     */
    'constraint' => '~0.9.9',

    /**
     * Auto-load all required files.
     */
    'requires' => [
      __DIR__ . '/app/CustomFields/taxonomies.php',
      __DIR__ . '/app/CustomFields/product-acf.php',
      __DIR__ . '/app/CustomFields/product-collection-acf.php',
      __DIR__ . '/app/custom-post-types.php',
    ],

    /**
     * Activate
     */
    'activators' => [
      __DIR__ . '/app/activate.php'
    ],

    /**
     * Activate
     */
    'deactivators' => [
      __DIR__ . '/app/deactivate.php'
    ],

    /**
     * The shortcodes to auto-load.
     */
    'shortcodes' => [
        // __DIR__ . '/app/shortcodes.php'
    ],

    /**
     * The widgets to auto-load.
     */
    'widgets' => [
        // __DIR__ . '/app/widgets.php'
    ],

    /**
     * The widgets to auto-load.
     */
    'enqueue' => [
        // __DIR__ . '/app/enqueue.php'
    ],

    /**
     * The routes to auto-load.
     */
    'routes' => [
      'AgreableProductPlugin' => __DIR__ . '/app/routes.php'
    ],

    /**
     * The panels to auto-load.
     */
    'panels' => [
        // '' => __DIR__ . '/app/panels.php'
    ],

    /**
     * The APIs to auto-load.
     */
    'apis' => [
        // '' => __DIR__ . '/app/api.php'
    ],

    /**
     * The view paths to register.
     *
     * E.G: 'MyPlugin' => __DIR__ . '/views'
     * can be referenced via @MyPlugin/
     * when rendering a view in twig.
     */
    'views' => [
      'AgreableProductPlugin' => __DIR__ . '/resources/views'
    ],

    /**
     * The view globals.
     */
    'viewGlobals' => [

    ],

    /**
     * The asset path.
     */
    'assets' => '/resources/assets/',

    /**
     * Namespace used in ACF Panel definitions.
     */
    'agreable_namespace' => 'agreable_product',

    /**
     *
     */
    'agreable_pluginTitle'      => 'Product'
];
