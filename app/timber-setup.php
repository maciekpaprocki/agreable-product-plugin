<?php namespace AgreableProductPlugin;

use Timber;
use TimberPost;
use stdClass;

class TimberSetup {

 function __construct() {
    add_filter('timber/loader/paths', array($this, 'add_timber_paths'));
    add_filter('timber_context', array($this, 'add_to_context'));
  }

  public function add_to_context($context) {

    $product_collection = new TimberPost(get_page_by_path('best-beauty', OBJECT, 'product_collection'));
    $product_collection_categories = get_field('categories', $product_collection->ID);

    $context['product_plugin'] = new stdClass();
    $context['product_plugin']->js_file = $this->get_js_file();
    $context['product_plugin']->css_file = $this->get_css_file();
    $context['product_plugin']->secondary_navigation = wp_get_nav_menu_items('best-beauty');
    $context['product_plugin']->product_collection = $product_collection;
    $context['product_plugin']->product_collection_categories = $product_collection_categories;

    return $context;
  }

  function get_css_file() {
    $plugin_root = realpath(__DIR__ . '/..');
    $stats_string = file_get_contents($plugin_root . '/stats.json');
    $stats_json = json_decode($stats_string);
    $css_filename = ($stats_json->assetsByChunkName->app[1]);
    return '/app/plugins/agreable-product-plugin/resources/assets/' . $css_filename;
  }

  function get_js_file() {
    $plugin_root = realpath(__DIR__ . '/..');
    $stats_string = file_get_contents($plugin_root . '/stats.json');
    $stats_json = json_decode($stats_string);
    $js_filename = ($stats_json->assetsByChunkName->app[0]);
    return '/app/plugins/agreable-product-plugin/resources/assets/' . $js_filename;
  }

  public function add_timber_paths($paths){
    $herbert_config = include __DIR__ . '/../herbert.config.php';

    array_push($paths, ['AgreableProductPlugin' => __DIR__ . '/../resources/views']);
    array_push($paths, ['AgreableProductPlugin' => __DIR__ . '/../resources/img']);
    return $paths;
  }
}

new TimberSetup();
