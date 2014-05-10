<?php include 'function.php'; ?>
<?php get_header("home"); ?>
<h2>欢迎使用@<?php echo NAME; ?> 认证系统~~~</h2>
<div class="alert alert-success">查一查，看看TA的网站是不是属于<?php echo NAME; ?>~</div>
<form class="form-search" method="get" novalidate="novalidate" action="<?php echo root_url(); ?>/s/" role="form"> 
	<input type="url" class="form-control" name="url" autocomplete="off" autofocus="autofocus" required="required" pattern="https?://.+" style="height:50px;width:100%;font-size:20px;" placeholder="系统酱提醒您，在此输入网址哦亲~" >
	<br /><br />
	<input type="submit" class="btn btn-large btn-primary" type="submit" style="cursor: pointer; border-radius: 0px; font-size: 30px; width: 100%;" value="查一查，全知道" />
</form>
<?php get_footer(); ?>