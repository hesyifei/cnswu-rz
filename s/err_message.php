<?php
//不顯示任何錯誤
error_reporting(0);
//錯誤信息（包括彩蛋）
switch ($url[0]){
	default:					//默認錯誤信息
		$err_message = "亲~系统酱提醒您，你=您碰到了骗子！这可不是中国学生站长联盟成员的网站哦~";
	break;
	case "gov.cn":
		$err_message = "你竟然敢拿天朝政府的网站造谣？！来人，把他抓起来！";
	break;
	case "edu.cn":
		$err_message = "你tm敢用教育部的域名装13，你对得起我们中学生吗？";
	break;
	case "gov.hk":
		$err_message = "你呃人！你講大話！堂堂香港政府點可能係中學生站長聯盟ge？";
	break;
	case "usa.gov":
		$err_message = "Sorry, but I don't know such thing as ZXSZZLM. Can I eat it?";
	break;
	case "go.jp":
		$err_message = "中国の違法青年組織？あなたはそれを食べることができますか？";
	break;
	case "com.kp":
		$err_message = "자본주의 아래로! 학생들 마스터 리그 다운!";
	break;
	case "baidu.com":
		$err_message = "亲~度娘可不是我们的妈妈哦~";
		break;
	case "google.com":
		$err_message = "亲~谷歌可不是我们的哦~";
	break;
	case "360.cn":
		$err_message = "亲~360永远都不可能是我们的哦~";
	break;
	case "qq.com":
		$err_message = "你疯了么？QQ怎么可能是我们的？";
	break;
	case "000webhost.com":
		$err_message = "亲~！三蛋空间不是我们的哦~";
	break;
	case "youtube.com":
	case "facebook.com":
	case "twitter.com":
		$err_message = "亲~你查询一个永远访问不了的网站有什么用呢？";
	break;
	case "dongtaiwang.com":
		$err_message = "咳咳，小心点";
	break;
	case "caodan.com":
		$err_message = "<del>艹氮网分享生活中最艹氮的事情</del>";
	break;
}
?>