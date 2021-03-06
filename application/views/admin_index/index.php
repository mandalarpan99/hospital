<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assects/src/stylesheet/login_style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assects/responsive.css') ?>">
</head>
<body>
  <div class="hospital">
    <div class="name">
    <h1>CT HOSPITAL</h1>
    <p>a hospital managment system developed by codego tecnica</p>
  </div>
  </div>
  <div class="login_container">
    <!-- Admin -->
    <div class="admin_panel login_panel">
      <div class="admin_logo logo">
        <img src="<?php echo base_url()?>assects/src/img/admin.png" alt="admin_logo">
        <h2 class="title">Admin Login</h2>
        <form class="form" action="<?php echo site_url('Hospital_controller/adminlogin') ?>" method="post" enctype="multipart/form-data">
          <input type="text" class="login" id="username" placeholder="Enter Username" name="userid">
          <input type="password" class="login" id="password" placeholder="Enter Password" name="password">
          <input type="submit" class="login login_btn" id="submit" value="LOGIN" >
          <a href="./pages/doctor.html" class="other">Doctor Login</a>
          <a href="./pages/employee.html" class="other">Employee Login</a>
          <a href="./pages/admin_dashboard.html" class="other">Admin Page Without Login</a>
        </form>
      </div>
    </div>
  </div>

  <!-- footer -->
  <div class="footer">
    <div class="social">
      <a class="footer_links" href="#"><i class="fa-brands fa-facebook"></i></a>
      <a class="footer_links" href="#"><i class="fa-brands fa-twitter"></i></a>
      <a class="footer_links" href="#"><i class="fa-brands fa-instagram"></i></a>
      <a class="footer_links" href="#"><i class="fa-brands fa-youtube"></i></a>
    </div>

    <div class="quick">
      <a class="footer_links" href="./index.html">Admin</a>
      <a class="footer_links" href="./pages/doctor.html">Doctor</a>
      <a class="footer_links" href="./pages/employee.html">Employee</a>
    </div>

    <div class="about">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam omnis magni minus, quod id doloremque nesciunt nisi ipsam itaque accusantium laboriosam sed dolor iste fuga?</p>
      <h2><center>Thank you</center></h2>
    </div>
  </div>
    
  
</body>
</html>