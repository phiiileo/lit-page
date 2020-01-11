<?php    
    include '../lib/Session.php';
    Session::checkStudentSession();
    include '../helpers/Format.php';

    spl_autoload_register(function ($class) {
        include_once "../classes/" . $class . ".php";
    });

    $class = new ClassApp();
    $student = new Student();

    $fm = new Format();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mathisi Students Section</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/studentDashboard.css">
 
</head>
<body>
  <?php
    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        Session::destroy();
    }
  ?>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">    

      <img src="../images/logo.png" alt="Avatar" class="profile">
      <p class="pn"><strong>Mathisi Student's Dashboard</strong> </p>
      <ul class="nav nav-pills nav-stacked" style="padding-top: 20px">
        <li class="active" style="color: white"><a href="student-dashboard.php"> <img class="side" src="../images/ic-round-notifications-none.png"> Dashboard</a></li>
        <li><a href="classroom.php" class="cl"> <img class="side" src="../images/mdi-teach.png"> Classroom</a></li>
        <li><a href="select-class.php" class="cl"> <img  class="side" src="../images/whh-student.png"> Enroll to class</a></li>
      </ul><br>
    </div> 

    <div class="col-lg-9" style="padding-top: 50px">
       <img src="../images/logo.png" alt="Mathisi Logo" class="logo">
       <!-- logout button -->
       <a href="?action=logout" title="Logout"><img src="../images/feather-settings.png" class="set"></a>
     
      <hr>
      <!-- greeting -->
      <h3 class="text-success">Hello <?php echo Session::get('studentName'); ?>!</h3>
      <a href="profile.php" title="Your Profile" class="btn btn-warning">Edit Your Profile</a>
      <hr>