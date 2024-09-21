<?php 


function adminlogin(){
    session_start();
    if(!(isset($_SESSION['adminlogin']) && $_SESSION['adminlogin'] == true )){
    //   header("location: admin_index.php") ;
    echo"
    <script>
    window.location.href='admin_index.php';
    </script>
    ";
     }
     session_regenerate_id(true); //to avoid session hijacking 
}

function redirect($url){
    echo"
    <script>
    window.location.href='$url';
    </script>
    ";
}
function alert($type , $msg){
    $bs_class = ($type == "success") ?"alert-success" : "alert-danger";
    echo <<<alert
          <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
            <strong class="me-3">$msg</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          alert;
}


?>