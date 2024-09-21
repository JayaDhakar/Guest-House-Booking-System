<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


require('../inc/essentials.php');
require('../inc/db_config.php');
adminlogin();


if(isset($_POST['get_general']))
{
    $q = "SELECT * FROM `settings` WHERE `sr_no`=? ";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    echo json_encode($data);
    exit;
    // $json_data = json_encode($data);
    // echo $json_data; 
    
}

if(isset($_POST['upd_general'])) {
    try {
        $frm_data = filter($_POST);
        $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `sr_no`=?";
        $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
        $res = update($q, $values, 'ssi');
        echo json_encode(['result' => $res]);
    } catch (Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
    exit;
}

// if(isset($_POST['upd_general']))
// {
//     $frm_data  = filter($_POST);
//     $q = " UPDATE `settings` SET `site_title`=?,`site_about`=? WHERE `sr_no`=?"
//     $values = [$frm_data['site_title'],$frm_data['site_about'],1] ; 
//      $res = update($q , $values , 'ssi');
//     //  echo $res;
//     echo json_encode(['result' => $res]);
// }
?>