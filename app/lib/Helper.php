<?php

function dd($str)
{
	echo '<pre>';
	var_dump($str);
	echo '</pre>';
	exit;
}

function showIncludeFile(){
	$included_files = get_included_files();
	dd($included_files);
}

function getSubDomain(){
	$subDomain = explode('.',$_SERVER['HTTP_HOST'][0]);
}
