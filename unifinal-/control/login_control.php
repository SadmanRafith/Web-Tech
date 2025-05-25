<?php
include "../model/mydb.php";

session_start();
if(isset($_REQUEST["submit"]))
{
    $conn = createcon();
    $res = checklogin($conn, $_REQUEST["username"], $_REQUEST["password"]);
    if(mysqli_num_rows($res) > 0){
        $user = mysqli_fetch_assoc($res);
        $_SESSION["user_id"] = $user["ID"];
        $_SESSION["email"] = $user["Email"]; 
        $_SESSION["fullName"] = $user["Fullname"];  // session key lowercase fullName
        header("Location: ../view/profile.php");
        exit();
    }    
    else{
        echo "no user found";
    }
}
?>
