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
<div id="wrapper">
<h2>Contact Path of Light Yoga Studio</h2>
<p>Required information is marked with an astrisk (*)</p>
</div>
<br><br><br>
<div>
<?php
    echo form_open('Mine/contact_submit');
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

  echo form_label('* Comments'. '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
  $comments = array(
  'name' => 'comments',
  'rows' => 5,
  'cols' => 32
  );
  echo form_textarea($comments);

echo "<br>";
echo "<br>";

echo form_submit('submit', 'Send Now', "class='but1'");
echo form_close(); 

  ?>
</div>
<br><br><br><br><br><br><br>
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