<?php

$hname = "localhost"; 
$uname = "root"; 
$pass = ""; 
$db = "hotel"; 

$conn = mysqli_connect($hname, $uname, $pass, $db);

if (!$conn) {
    die("Connection failed with database ".mysqli_connect_error());
}
function filter($data){
    foreach($data as $key => $value){
        $data[$key]= trim($value);
        $data[$key]= stripcslashes($value);
        $data[$key]= htmlspecialchars($value);
        $data[$key]= strip_tags($value);
    }
    return $data;
}
function select($sql,$values,$datatypes){
    $conn = $GLOBALS['conn'];
    if($stmt = mysqli_prepare($conn,$sql)){
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);//... 3 dots are splat operator
       if( mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        return $res;
       }
       else{
        mysqli_stmt_close($stmt);
        die("query cannot be  executed! -select ");
       }
      
       }

    
    else{
        die("query cannot be prepares! -select ");
    }
   

}    

function update($sql,$values,$datatypes){
    
        $conn = $GLOBALS['conn'];
        if($stmt = mysqli_prepare($conn,$sql)){
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);//... 3 dots are splat operator
           if( mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
           }
           else{
            mysqli_stmt_close($stmt);
            die("query cannot be  executed! - Update ");
           }
          
           }
    
        
        else{
            die("query cannot be prepares! - Update ");
        }
       
    
    
}
?>


