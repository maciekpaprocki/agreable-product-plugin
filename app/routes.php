<?php namespace AgreableProductPlugin;

/** @var \Herbert\Framework\Router $router */

$router->get([
  'as'   => 'productCollectionIntro',
  'uri'  => '/shop/{product_collection_slug}',
  'uses' => __NAMESPACE__ . '\Controllers\ProductCollectionController@intro'
]);
