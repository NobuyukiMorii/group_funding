<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $title_for_layout; ?></title>
    <?php echo $this->Html->css('orange.css');?>
    <?php echo $this->Html->css('jquery.mobile.icons.min.css');?>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
    <?php echo $this->Html->css('style.css');?>
    <?php echo $this->Html->script('jquery-2.1.1.js');?>
    <?php echo $this->Html->script('MobileConfig.js');?>
    <?php echo $this->Html->script('jquery.mobile-1.4.3.js');?>
	<?php echo $this->fetch('meta');?>
	<?php echo $this->fetch('css');?>
	<?php echo $this->fetch('script');?>
</head>
<body >

<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->fetch('content'); ?>

</body>
</html>