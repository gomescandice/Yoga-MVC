<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/yoga.css">
  <title>Path of Light Yogo Studio</title>
</head>

<body>
<div class= "header">
<h1 class = "h1"> &nbsp; Path of Light Yogo Studio <img class = "himg" src="<?php echo base_url('images/lilyheader.jpg'); ?>" /></h1>
</div>
<br>
<div id="mylinks" class="links">
<form style="display:inline-block">
<nav>
<a class = "but" href="<?php echo site_url('Mine/index') ?>">Home</a>
&nbsp;
<a class = "but" href="<?php echo site_url('Mine/classes') ?>">Classes</a>
&nbsp;
<a class = "but" href="<?php echo site_url('Mine/schedule') ?>">Schedule</a>
&nbsp;
<a class = "but" href="<?php echo site_url('Mine/register') ?>">Register</a>
&nbsp;
<a class = "but" href="<?php echo site_url('Mine/contact') ?>">Contact</a>
&nbsp;
</nav>
</form>
</div>
<img alt="Mat" style="width:750px;height:300px;" src="<?php echo base_url('images/yogamat.jpg'); ?>" />

<div id="wrapper">
<h2>Yoga Classes</h2>


	<?php foreach ($class as $class_item): ?>

        <h3><?php echo $class_item->classname; ?></h3>
        <div class="main">
                <?php echo $class_item->description; ?>
        </div>

	<?php endforeach; ?>

</div>
<br><br><br><br>

<div class="footer">
<footer>
<small>Copyright &copy; 2016, Path of Light Yoga Studio</small>
</footer>
<address>
<small><a href="mailto:candicereneeromeo@gomes.com">candicereneeromeo@gomes.com</a></small>
</address>
</div>

</body>
</html>