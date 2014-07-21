

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Crowd Funding</title>
		<?php

			echo $this->Html->css('bootstrap.css');

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php echo $this->Html->css('bootstrap.css');?>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
<div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Crowd Funding</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">About</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container">
  
	<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>
  
</div><!-- /.container -->
	<!-- script references -->
	<?php
		echo $this->Html->script('bootstrap.js');
		echo $this->Html->script('jquery-2.1.1.js');
	?>
	<?php echo $this->element('sql_dump'); ?>
	</body>
</html>