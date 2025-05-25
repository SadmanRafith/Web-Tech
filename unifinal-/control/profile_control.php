<?php
include "../model/mydb.php";

session_start();
/*if (!isset($_SESSION["user_id"])) {
    die("User not logged in.");
}*/

$userId = $_SESSION["user_id"];
$conobj = createcon();
$result = fetchuserdata($conobj, $userId);

$userData = null;
if (mysqli_num_rows($result) > 0) {
    $userData = mysqli_fetch_assoc($result);
}

closecon($conobj);
?>
