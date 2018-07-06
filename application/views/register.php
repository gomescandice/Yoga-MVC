<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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

<div id="wrapper">
<h2>Contact Path of Light Yoga Studio</h2>
<p>Required information is marked with an astrisk (*)</p>
</div>
<br><br><br>
<?php 
echo form_open('Mine/register_submit');
if (isset($message)) { 
echo "<script type='text/javascript'> alert('$message');</script>";
 } 
    
    echo form_label('* Name' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
    $name = array(
    'name' => 'name',
    'id' => 'name_id',
    'class' => 'input_box',
    'placeholder' => 'Enter your name'
  );
  echo form_input($name);
  echo "<br>";
  echo "<br>";

    echo form_label('* Phone' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
    $phone = array(
    'name' => 'phone',
    'id' => 'phone_id',
    'class' => 'input_box',
    'placeholder' => 'Enter your phone number'
  );
  echo form_input($phone);
  echo "<br>";
  echo "<br>";

    echo form_label('* Email' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
    $email = array(
    'name' => 'email',
    'id' => 'email_id',
    'class' => 'input_box',
    'placeholder' => 'Enter your email'
  );
  echo form_input($email);
  echo "<br>";
  echo "<br>";

    echo form_label('* Password' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
    $password = array(
    'name' => 'password',
    'id' => 'password_id',
    'class' => 'input_box',
    'type'=>'password',
    'placeholder' => 'Enter your password'
  );
  echo form_input($password);
  echo "<br>";
  echo "<br>";

  echo form_label('* Address'. '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
  $address = array(
  'name' => 'address',
  'rows' => 5,
  'cols' => 32
  );
  echo form_textarea($address);
  echo "<br>";
  echo "<br>";

echo form_label('* Type of Class' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
$class_type = array(
 'Gentle' => 'Gentle',
 'Vinyasa' => 'Vinyasa',
 'Restorative' => 'Restorative'
);
echo form_dropdown('class_type', $class_type, 'Gentle', 'class="dropdown_box"');
echo "<br>";
echo "<br>";

echo form_label('* Schedule' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
$schedule = array(
 'weekday' => 'Monday - Friday',
 'weekend' => 'Staurday - Sunday'
);
echo form_dropdown('schedule', $schedule, 'Monday - Friday', 'class="dropdown_box"');
echo "<br>";
echo "<br>";

echo form_label('* Time' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
$time = array(
 '1' => '9:00 AM',
 '2' => '10:30 AM',
 '3' => 'Noon',
 '4' => '1:30 PM',
 '5' => '3:00 PM',
 '6' => '5:30 PM',
 '7' => '7:00 PM'
);
echo form_dropdown('time', $time, 'Male', 'class="dropdown_box"');
echo "<br>";
echo "<br>";

echo form_submit('submit', 'Register Now', "class='but1'");
echo form_close(); 

  ?>
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