<?php

require('../inc/essentials.php');
 require('../inc/db_config.php');
adminlogin();

if(isset($_POST['add_feature']))
{
    $frm_data = filter($_POST);
    $q = " INSERT INTO `features`(`name`) VALUES (?)";
    $values = [$frm_data['name']];
    $res = insert($q,$values,'s');
    echo $res;

}


?>