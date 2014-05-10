<?php
//如果直接訪問
if(!isset($_SERVER['HTTP_REFERER'])){
	header('Refresh: 10; url="/"');
	die(include("../errpage/403.html"));
}

//不顯示任何錯誤
error_reporting(0);

//獲取用戶選擇的圖片編號
if (empty($_GET['img'])){	//如果沒有選擇輸入圖片編號或圖片編號不存在
	$img_number = "1";
}else if(!is_file("../img/rz".$_GET['img'].".png")){
	die();
}else{
	$img_number = $_GET['img'];
}

//取得存有域名資料的TXT內容
$site_file = file_get_contents("../s/site.php");
//將「site.txt」內的域名由「|」分開
$site = explode("|", $site_file);

//取得當前頁面地址
$url_full = $_SERVER['HTTP_REFERER'].$_SERVER['REQUEST_URI'];
$url = parse_url($url_full);
$url = $url['host'];
//將鏈接地址中的字母轉換為小寫
$url = strtolower($url);

//驗證開始
foreach ($site as $ssite) {
if(preg_match("{".$ssite."}", $url)){
	$image = imagecreatefrompng("../img/rz".$img_number.".png");
	$rz = true;
}
}

if (!isset($rz)){
	$image = imagecreatefrompng("../img/no.png");
}

header('Content-Type: image/png');

//開啟圓角及透明
imagealphablending($image, true); 
imagesavealpha($image, true); 

//輸出圖像
imagepng($image);
imagedestroy($image);

?>