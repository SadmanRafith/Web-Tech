<?php

function createcon(){
    return new mysqli("localhost", "root", "", "event");
}

function insertdata($conn, $fullname,$password, $email, $phone, $dob, $gender, $terms){
    $sql = "INSERT INTO EVENT (fullName, password, email, phone, dob, gender, terms) 
        VALUES ('$fullname','$password', '$email', '$phone', '$dob', '$gender', '$terms')";
        

    if ($conn -> query($sql))
    {
       return true;

    }
 else {
    return false;
 }

}

function closecon($conn){
    $conn -> close();
}

function checklogin($conn, $fullname, $password)
{
    $sql = "SELECT fullName , password FROM EVENT WHERE fullName = '$fullname' AND password = '$password'";
    return mysqli_query($conn, $sql);
}

function fetchuserdata($conn, $fullname){
    $sql = "SELECT * FROM EVENT WHERE fullName = '$fullname'";
    return mysqli_query($conn, $sql);
}
?>