<?php
//不顯示任何錯誤
error_reporting(0);

//獲取當前頁面地址
function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {
		$pageURL .= "s";
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

//獲取首頁地址
function root_url(){
	$folder_path = dirname(__FILE__);
	$root_path = $_SERVER['DOCUMENT_ROOT'];
	$root_url = str_replace($root_path, "", $folder_path);
	$root_url = "http://".$_SERVER['HTTP_HOST'].$root_url;
	return $root_url;
}

//獲取首頁路徑
function folder_path(){
	$folder_path = dirname(__FILE__);
	return $folder_path;
}

define("NAME", "中国学生站长联盟");
define("URL", "http://www.cnswu.org/");
define("BBS_URL", "http://bbs.cnswu.org/");
define("RZ_URL", "http://rz.cnswu.org/");

include folder_path().'/header.php';
include folder_path().'/footer.php';

