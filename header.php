<?php function get_header($page_name){ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>@<?php echo NAME; ?> 认证系统</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<link href="http://cdn.bootcss.com/twitter-bootstrap/3.0.2/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo root_url(); ?>/bootstrap-select.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="//cdnjs.bootcss.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo root_url(); ?>/style.css" />
	<link rel="stylesheet" href="<?php echo root_url(); ?>/hl.css" media="all" />
	<script src="<?php echo root_url(); ?>/hl-all.js"></script>
	<script src="<?php echo root_url(); ?>/code_highlight.js"></script>
	<script src="<?php echo root_url(); ?>/bootstrap-select.js"></script>
	<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.2/js/bootstrap.js"></script>
	<script>
		$(window).on('load', function () {

			$('.selectpicker').selectpicker({
				'selectedText': 'cat'
			});

			// $('.selectpicker').selectpicker('hide');
		});
	</script>
</head>
<body onload="DlHighlight.HELPERS.highlightByName('fooname', 'pre');">
<div class="container-narrow">
	<div class="masthead">
		<div class="pull-right">
			<ul class="nav nav-pills">
				<li class="<?php if($page_name == "home"){ ?>active<?php } ?>"><a href="<?php echo root_url(); ?>/">首页</a></li>
				<li class="<?php if($page_name == "img"){ ?>active<?php } ?>"><a href="<?php echo root_url(); ?>/img.php">展示脚本</a></li>
				<li class=""><a href="<?php echo URL; ?>" target="_blank">联合博客</a></li>
				<li class=""><a href="<?php echo BBS_URL; ?>" target="_blank">联合论坛</a></li>
			</ul>
		</div>
		<h3><?php echo NAME; ?></h3>
	</div>
	<hr>
<?php } ?>