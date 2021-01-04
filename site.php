<?php

use \Hcode\Page;
use \Hcode\Model\Product;
use \Hcode\Model\Category;


$app->get('/', function() {
    
	$products = Product::listAll();

	$page = new Page();

	$page->setTpl("index", [
		'products'=>Product::checkList($products)

	]);

});



?>