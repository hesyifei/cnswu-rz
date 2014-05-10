<?php include '../function.php'; ?>
<?php get_header(); ?>
<h2>欢迎使用@<?php echo NAME; ?> 展示脚本生成系统~~~</h2>
<?php
$url = htmlspecialchars($_GET["url"]);
$img = htmlspecialchars($_GET["img"]);
?>
<?php if(!empty($_GET["url"])){ ?>
<div class="alert alert-success">你可以把以下HTML代码放在你博客的页脚：</div>
<div style="text-align: center;">预览：<a href="<?php echo root_url(); ?>/s/?url=<?php echo $url; ?>" target="_blank"><img src="<?php echo root_url(); ?>/rz.png?img=<?php echo $img; ?>" /></a></div>
<br />
<pre name="fooname" class="html"><?php echo htmlspecialchars('<a href="'.root_url().'/s/?url='.$url.'" target="_blank"><img src="'.root_url().'/rz.png?img='.$img.'" /></a>'); ?></pre>
<?php }else{ ?>
<div class="alert alert-danger">亲~系统酱提醒您，你=您还没输入任何内容哦~</div>
<?php } ?>
<?php get_footer(); ?>