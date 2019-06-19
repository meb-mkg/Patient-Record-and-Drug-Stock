<?php
session_start();
//check if the user is logged in
if(empty($_SESSION['username']))// if(!SESSION['username'])
{
	header("location: index.php");
}
?>
<!DOCTYPE php>
<php lang="en-US">
  <head>
   <title>Admin Dashboard</title>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
   <meta name="viewport" content="width=device-width" />
   
   <link rel="icon" type="image/png" href="assets/ico/mit.jpg">
   <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" />
   <link href="admin/assets/css/bootstrap-dashboard.css" rel="stylesheet"/>

   <!--     Fonts and icons     -->
   <link href="assets/font-awesome/css/all.css" rel="stylesheet">
   <link href="assets/font-awesome/css/fontawesome.css" rel="stylesheet">
   <link href="admin/assets/css/fonts.css" rel="stylesheet"/>

   <style type="text/css">
   .dropdown-divider {
     height: 0;
     margin: 0.5rem 0;
     overflow: hidden;
     border-top: 1px solid #e9ecef;
   }
 </style>

</head>
<body>

  <div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="">
     <div class="sidebar-wrapper">
      <div class="logo">
        <a href="http://www.mitethiopia.com" class="simple-text">
          MIT Clinic Patient Record and Drug Stock
        </a>
      </div>
      <ul class="nav">
        <li class="active">
          <a href="admin.php">
            <i class="fa fa-desktop" aria-hidden="true""></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li>
          <a href="patient_list.php">
            <i class="fa fa-user"></i>
            <p>Patient</p>
          </a>
        </li>
        <li>
          <a href="nurse.php">
            <i class="fas fa-user-nurse"></i>
            <p>Nurse</p>
          </a>
        </li>
        <li>
          <a href="pharmacist.php">
            <i class="fa fa-plus-circle"></i>
            <p>Pharmacist</p>
          </a>
        </li>
        <li>
          <a href="settings.php">
            <i class="fa fa-cogs"></i>
            <p>Settings</p>
          </a>
        </li>
        <li>
          <a href="profile.php">
            <i class="fa fa-lock"></i>
            <p>Profile</p>
          </a>
        </li>

      </ul>
    </div>
  </div>

  <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="#"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;Admin Dashboard</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li>

            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
           <li>
             <a href="#">
              <i class="fa fa-user"></i>
              Admin Panel
            </a>
          </li>
          <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Select Language
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="english.php">English</a></li>
            <li><a href="amharic.php">Amharic</a></li>
            <li><a href="tigrigna.php">Tigrigna</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           Account
           <b class="caret"></b>
         </a>
         <ul class="dropdown-menu">
           <li><a href="#" class="dropdown-item">Admin</a></li>
           <div class="dropdown-divider"></div>
           <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i>Profile</a></li>
           <li><a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
         </ul>
       </li>
     </ul>
   </div>
 </div>
</nav>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div>
      </div>
    </div>
  </div>
</div>


<footer class="footer">
  <div class="container-fluid">
    <p class="copyright pull-left" style="margin-left: 300px;">Copyright 
      &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.mitethiopia.com">MIT</a>. All rights reserved.
    </p>
  </div>
</footer>

</div>
</div>
</body>

<!--    JS Files   -->
<script src="admin/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="admin/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-dashboard.js"></script>

</php>
