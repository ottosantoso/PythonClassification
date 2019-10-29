<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form Raport Online</title>
    
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets//login/css/reset.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?php echo base_url();?>assets//login/css/style.css">

    
    
    
  </head>

  <body>

    
<div class="container">
  <div class="info">
    <h1>Raport Online Login</h1><span>SMP Telkom Bandung <!--<i class="fa fa-heart"></i> by <a href="http://andytran.me">Otto Siahaan</a>--></span>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="<?php echo base_url();?>assets/telkomuniversity.png"/></div>  
  <form class="login-form" method="post" action="<?php echo base_url('index.php/c_login/check');?>">
  <?php echo $this->session->flashdata('Gagal'); ?>
    <input type="text" id="username" name="username" placeholder="username" value="<?php echo set_value('username');?>" placeholder="Username" autofocus required/>
    <input type="password" id="password" name="password" placeholder="password" value="<?php echo set_value('password');?>" required/>
    <button name="btn" type="submit">login</button>
  </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="<?php echo base_url();?>assets//login/js/index.js"></script>    
  </body>
</html>
