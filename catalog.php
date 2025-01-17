<?php
$categories = get_cat();
$categories_tree = map_tree($categories);
$categories_menu = categories_to_string($categories_tree);


if(isset($_GET['category'])){
	$id = (int)$_GET['category'];
	// хлебные крошки
	// return true (array not empty) || return false
	$breadcrumbs_array = breadcrumbs($categories, $id);
	
	if($breadcrumbs_array){
		$breadcrumbs = "<a href='/catalog/'>Главная</a> / ";
		foreach($breadcrumbs_array as $id => $title){
			$breadcrumbs .= "<a href='?category={$id}'>{$title}</a> / ";
		}
		$breadcrumbs = rtrim($breadcrumbs, " / ");
		$breadcrumbs = preg_replace("#(.+)?<a.+>(.+)</a>$#", "$1$2", $breadcrumbs);
	}else{
		$breadcrumbs = "<a href='/catalog/'>Главная</a> / Каталог";
	}
}

?>