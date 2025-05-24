<?php
include "../model/mydb.php";

session_start();
$fullName = $_SESSION["fullName"];
$conobj = createcon();
$result = fetchuserdata($conobj, $fullName);
$userData = null;
if (mysqli_num_rows($result) > 0) {
  $userData = mysqli_fetch_assoc($result); // Only one row expected
}
/*if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["fullName"]. "<br>";
  }
} else {
  echo "0 results";
}*/

closecon($conobj);
?>