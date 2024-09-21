<?php
require('inc/essentials.php');
adminlogin();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin panel - Dashboard</title>
    <link rel="stylesheet" href="css/common.css">
    <?php
    require('inc/links.php'); ?>
  </head>
  <body class="bg-light">
  <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top ">
      <h3 class="mb-0 h-font">DLJ-Guest House</h3>
      <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>
    <?php
    require('inc/header.php'); ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden ">
                
            </div>
        </div>
    </div>
    <?php  require('inc/scripts.php');?>
  </body>
</html>
