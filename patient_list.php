<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />


  <!-- Bootstrap core CSS -->
  
  <link rel="icon" type="image/png" href="assets/ico/mit.jpg">
  <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="admin/assets/css/bootstrap-dashboard.css" rel="stylesheet"/>

  <!--     Fonts and icons     -->
  <link href="assets/font-awesome/css/all.css" rel="stylesheet">
  <link href="assets/font-awesome/css/fontawesome.css" rel="stylesheet">
  <link href="admin/assets/css/fonts.css" rel="stylesheet"/>

</head>
<body>

  <div class="wrapper" style="margin-right: 10px;">
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

    <div class="main-panel" style="margin-left: 10px;">
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
               <a href="">
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
              <li><a href="#">English</a></li>
              <li><a href="#">Amharic</a></li>
              <li><a href="#">Tigrigna</a></li>
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
      <div class="col-6">
        <form method="post" action="search.php" style="float: right" class="form-inline">
          <!--<span class="glyphicon glyphicon-search"></span> -->
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search"></i></span>
            </div>
            <input type="search" name="search" placeholder="Search" class="form-control mr-sm-2 rounded-0 py-2 ">
          </div>
          <input type="submit" name="submit" value="Search" class="btn btn-primary btn-lg">
        </form>
      </div>
      <div class="row" style="margin-left: 10px;">
        <div class="col-6">
          <div class="page-header" style="margin-bottom: 0px">
            <h1>Patient List</h1>    
          </div>
        </div><br><br>
        <?php
        if(isset($_POST['submit']))
        {
          include 'search.php';
        }
        else
        {

        }
        ?>
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover center" style="margin-left: 10px;">
            <tr>
              <th><b>ID</b></th>
              <th><b>First Name</b></th>
              <th><b>Last Name</b></th>
              <th><b>Year</b></th>
              <th><b>Department</b></th>
              <th><b>Gender</b></th>
              <th><b>Age</b></th>
              <th><b>Edit</b></th>
              <th><b>Delete</b></th>
              <th><b>Description</b></th>
            </tr>
            <?php
            $select_patient = "select * from patients";
            $result_select = $conn->query($select_patient);
            while($row=$result_select->fetch_assoc())
            {
              $pid = $row['id'];
              $fname = $row['first_name'];
              $lname = $row['last_name'];
              $year = $row['year'];
              $dept = $row['department'];
              $gender = $row['gender'];
              $age = $row['age'];
              ?>
              <tr>
                <td><?php echo $pid; ?></td>
                <td><?php echo $fname; ?></td>
                <td><?php echo $lname; ?></td>
                <td><?php echo $year; ?></td>
                <td><?php echo $dept; ?></td>
                <td><?php echo $gender; ?></td>
                <td><?php echo $age; ?></td>
                <td><a class="btn btn-primary btn-sm" role="button" href="edit_patient.php?edit=<?php echo $pid; ?>">Edit</a></td>
                <td><a class="btn btn-danger btn-sm" role="button" href="patient_list.php?delete=<?php echo $pid; ?>">Delete</a></td>
                <td><a class="btn btn-primary btn-sm" role="button" href="patient_description.php?desc=<?php echo $pid; ?>">Description</a></td>
              </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
if(isset($_GET['delete']))
{
  $pid = $_GET['delete'];
  $delete_patient = "delete from patients where id = '$pid' ";
  $result_delete = $conn->query($delete_patient);
  if($result_delete)
  {
    echo "<script>alert('Patient Deleted!')</script>";
    echo "<script>window.open('patient_list.php', '_self')</script>";
  }
}
?>
<?php 
if(isset($_GET['edit']))
{
  include 'edit_patient.php';
}
?>
<?php 
if(isset($_GET['desc']))
{
  include 'patient_description.php';
}
?>
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
<script src="admin/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="admin/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-dashboard.js"></script>
</html>
