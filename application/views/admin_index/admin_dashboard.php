<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assects/src/stylesheet/admin_dashboard.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assects/src/stylesheet/animation.css">
  <link rel="stylesheet" href="<?php echo base_url()?>responsive.css">
  <!-- fontawasome icon cdn -->
</head>

<body>
  <div class="dashboard">
    <div class="admin">
      <div class="header">
        <span class="logo">CT HOSPITAL</span>
        <a class="log_out" href="./../index.html"><i class="fa fa-sign-out"></i> </a>
      </div>
      <div class="profile">
        <img src="./../src/img/admin.png" alt="admin_profile">
        <span class="username">Admin</span>
        <span class="username">Pritesh</span>
      </div>
        <div class="quick_links">
          <a class="links" href="./admin_dashboard.html" id="active"><li><i class="fa fa-dashboard" ></i>  Dashboard</li></a>
          <a class="links" href="./doctor_dashboard.html"><li><i class="fa fa-user-md"></i>  Doctors</li></a>
          <a class="links" href="./employee_dashboard.html"><li><i class="fa-solid fa-users"></i>  Employee</li></a>
          <a class="links" href="./appointment_dashboard.html"><li><i class="fa-regular fa-calendar-check"></i>  Appointment</li></a>
        </div>
      </div>
 
    <!-- boxes -->

    <div class="main_container">

      <!-- Doctors -->
  
      <div class="doctor container" onclick="location.href='total_doctor.html'">
        <span class="number">8</span>
        <span class="title"><i class="fa fa-user-md"></i>  Total Doctors </span>
        <span class="detail">Add / Delete / Se List / Appointments</span>
      </div>
    
      <!-- Appointments -->

      <div class="appointment container" onclick="location.href='total_appointment.html'">
        <span class="number">100+</span>
        <span class="title"><i class="fa-regular fa-calendar-check"></i>  Total Appointment</span>
        <span class="detail">See Lists / Confirm / Reject / Book Appointment</span>
      </div>

      <!-- Employees -->

      <div class="employee container" onclick="location.href='new_registration.html'">
        <span class="number">50+</span>
        <span class="title"><i class="fa-solid fa-users"></i>  New Registrations</span>
        <span class="detail">New Registration Doctors / Employees / Patient</span>
      </div>


      <div class="main_container_box">

        <div class="doctor container">
          <span class="title"><i class="fa-solid fa-users"></i>  Registration</span>
          <span class="detail">See Registration Lists / Edit / Delete / Approve</span>
          <a href="#" class="click_here">Click Here</a>
        </div>


          <!-- Appointments -->

        <div class="appointment container">
          <span class="title"><i class="fa-regular fa-calendar-check"></i>  Ward</span>
          <span class="detail">Bed Management</span>
          <a href="#" class="click_here">Click Here</a>
        </div>

        <!-- Employees -->
        
        <div class="employee container">
          <span class="title"><i class="fa fa-user-md"></i>  Operation Reports</span>
          <span class="detail">Operations Reports Management</span>
          <a href="#" class="click_here">Click Here</a>
        </div>

        <!-- Attendence -->

        <div class="employee container">
          <span class="title"><i class="fa fa-user-md"></i>  Doctor</span>
          <span class="detail">Doctor Management</span>
          <a href="#" class="click_here">Click Here</a>
        </div>


        <div class="employee container">
          <span class="title"><i class="fa fa-user-md"></i>  Birth Reports</span>
          <span class="detail">Birth Reports Management</span>
          <a href="#" class="click_here">Click Here</a>
        </div>


        <div class="employee container">
          <span class="title"><i class="fa fa-user-md"></i>  Setting</span>
          <span class="detail">Update and Chances</span>
          <a href="#" class="click_here">Click Here</a>
        </div>
        

      </div>
      
    </div>
  </div>



  <script src="./../src/script/script.js"></script>
</body>
</html>