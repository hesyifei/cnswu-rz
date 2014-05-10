<?php include 'function.php'; ?>
<?php get_header("img"); ?>
<h2>欢迎使用@<?php echo NAME; ?> 展示脚本生成系统~~~</h2>
<div class="alert alert-success">秀一秀，让大家知道你是<?php echo NAME; ?>的~</div>
<form class="form-search form-inline" method="get" novalidate="novalidate" action="<?php echo root_url(); ?>/s/img.php" role="form">
	<div class="form-group">
		<input type="url" class="form-control" name="url" autocomplete="off" autofocus="autofocus" required="required" pattern="https?://.+" style="height: 50px; width: 800px; font-size: 20px;" placeholder="系统酱提醒您，在此输入网址哦亲~" />
	</div>
	<div class="form-group">
	<select class="selectpicker" id="img_selected" name="img" onchange="img_demo.src = '<?php echo root_url(); ?>/rz.png?img=' + this.value" required="required">
		<option value="0" selected="selected">请选择样式...</option>
		<?php for($img_select_num=1; $img_select_num<=10; $img_select_num++){ ?>
		<option value="<?php echo $img_select_num; ?>">样式<?php echo $img_select_num; ?></option>
		<?php } ?>
	</select>
	</div>
	<br /><br />
	<div style="text-align: center;"><img id="img_demo" src=""></div>
	<br />
	<input type="submit" class="btn btn-large btn-primary" style="cursor: pointer; border-radius: 0px; font-size: 30px; width: 100%;" value="秀一秀" />
</form>
<?php get_footer(); ?>