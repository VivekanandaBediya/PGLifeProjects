<?php
  $db_hostname = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "PGLIFE_DATABASE";

  $conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

//   if($conn){
//     echo "Connection successfully !!";
//   }else{
//     echo "Failed : ".mysqli_connect_error($conn);
//     exit;
//   }
?>