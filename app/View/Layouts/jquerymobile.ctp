<!DOCTYPE html>
<html>
<head>
<!-- UTF８に設定 -->
<?php echo $this->Html->charset(); ?>
<title>
<?php echo $title_for_layout; ?>
</title>
<meta name="viewport" content="width=device-width,minimum-scale=1">
<!-- jQueryMobileのcssを読み込む -->
<?php echo $this->Html->css('jquery.mobile-1.4.3.css');?>
<!-- まずjQueryを読み込む -->
<?php echo $this->Html->script('jquery-2.1.1.js');?>
<!-- その後、jQueryMobileを読み込む -->
<?php echo $this->Html->script('jquery.mobile-1.4.3.js');?>
<?php echo $this->fetch('meta');?>
<?php echo $this->fetch('css');?>
<?php echo $this->fetch('script');?>
</head>
<body>
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>