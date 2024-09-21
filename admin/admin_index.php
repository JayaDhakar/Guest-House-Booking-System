<?php 
require('inc/essentials.php');
require('inc/db_config.php');

session_start();

if((isset($_SESSION['adminlogin']) && $_SESSION['adminlogin'] == true )){
//   header("location: admin_index.php") ;
redirect('dashboard.php');

}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login Panel</title>
    <?php require('inc/links.php')?>
    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }
    </style>
  </head>
  <body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
      <form method="POST" >
        <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
        <div class="p-4">
          <div class="mb-3">
            <!-- <label class="form-label">Email address</label> -->
            <input name="admin_name"required type="text" class="form-control shadow-none text-center "placeholder="Admin Name" >
          </div>
          <div class="mb-4">
            <!-- <label class="form-label">Password</label> -->
            <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password" >
          </div>
          <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
        </div>
      </form>
    </div>
    <?php 
    if(isset($_POST['login'])){
        $frm_data = filter($_POST);
        // echo"<h4>$frm_data[admin_name]</h4>";
        // echo"<h4>$frm_data[admin_pass]</h4>";
        $query ="SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=? ";
        $values = [$frm_data['admin_name'],$frm_data['admin_pass']];
        // $datatypes ="ss";

        $res = select($query,$values,"ss");
        // print_r($res);
        if($res->num_rows==1){
          // echo"got user";
          $row = mysqli_fetch_assoc($res);
          // session_start();
          $_SESSION['adminlogin']= true;
          $_SESSION['adminid']= $row['sr_no'];
          redirect('dashboard.php');
        }
        else{
          alert('error','Login failed - Invalid Cerediantals');

        }

    }
    ?>

    <?php require('inc/scripts.php')?>
  </body>
</html>
