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
<img alt="Lounge" style="width:750px;height:300px;" src="<?php echo base_url('images/yogalounge.jpg'); ?>" />


<div id="wrapper">
<h2>Yoga Schedule</h2>
<p style="margin-left: 40px">Mats, blocks and blankets provided. Please arrive 10 minutes before your class begins. Relax in our Serenity Lounge beofre or after your class.</p>

  <?php 
  $i=0;
  foreach ($schedule1 as $schedule_item1): ?>

        <h3><?php echo $schedule_item1->daysname; ?></h3>
        <?php 
        
        if($i === 0){
            foreach ($schedule2 as $schedule_item2): 
            echo $schedule_item2->time . "  " . $schedule_item2->classname; 
            echo "<br>";
            endforeach;
            $i++;  
        }else{
            foreach ($schedule3 as $schedule_item3): 
            echo $schedule_item3->time . "  " . $schedule_item3->classname; 
            echo "<br>";
            endforeach;
        }

endforeach; ?>
</div>
<!--/Users/candicegomes/.bitnami/stackman/machines/xampp/volumes/root/htdocs/project4/schedule.php-->
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