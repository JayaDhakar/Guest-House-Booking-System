<?php  
require('../inc/db_config.php');
require('../inc/essentials.php');
adminlogin();

if(isset($_POST['add_room']))
{
    $frm_data = filter($_POST);
    $flag = 0;

    $ql = "INSERT INTO `rooms`( `name`, `area`, `price`, `quantity`, `adult`, `children`) VALUES (? , ? , ? , ? , ? , ?)";
    $value = [$frm_data['name'],$frm_data['area'],$frm_data['price'],$frm_data['quantity'],$frm_data['adult'],$frm_data['children'] ]
    if(insert($ql, $values ,'siiiii' )){
        $flag = 1;
        

    }


}


?>