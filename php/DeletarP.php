<?php
include_once('sqlDelete.php');


if(isset($_POST["user"]) && $_POST["user"] != ""){
    
    $user = $_POST["user"];
    
   
        $delet = deletUser($user);
        
        if($delet == "ok"){
            echo "success";
            return;
        }
    
    
}
else
    echo "nullField";
?>