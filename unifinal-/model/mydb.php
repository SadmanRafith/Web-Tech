<?php

function createcon(){
    return new mysqli("localhost", "root", "", "events");
}

function insertdata($conn, $fullname,$email, $password, $gender, $dob, $terms,$phone){
    $sql = "INSERT INTO EVENTS (FullName,Email, password, Gender, Birthdate,TermsandConditions, Phone) 
        VALUES ('$fullname','$email','$password' ,'$gender', '$dob', '$terms','$phone')";
        

    if ($conn -> query($sql))
    {
    return true;

    }
 else {
    //die ("error". $conn -> error);
    return false;
 }

}

function closecon($conn) {
    $conn->close();
}
function checklogin($conn, $fullname, $password)
{
    $sql = "SELECT FullName , password FROM EVENTS WHERE FullName = '$fullname' AND password = '$password'";
    return mysqli_query($conn,$sql);
}
function fetchuserdata($conn, $fullname) {
    $sql = "SELECT * FROM EVENTS WHERE Fullname = '$fullname'";
    return mysqli_query($conn, $sql);
}       

?>