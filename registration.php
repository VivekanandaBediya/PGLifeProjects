<?php
  include "DB_Connection.php";

if(isset($_POST['sbutton'])){
    $name = $_POST['name'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $pass = $_POST['passwrd'];
    $college = $_POST['college'];
    $gender = $_POST['gender'];
}
$hash_pass = password_hash($pass,PASSWORD_DEFAULT);
$add_sql = "INSERT INTO PGLife_Users(NAME,PHONE,EMAIL,PASS,COLLEGE,GENDER)VALUES('$name',$phone,'$email','$hash_pass','$college','$gender')";

$add_result = mysqli_query($conn,$add_sql);

if($add_result){
    echo "<script>alert('Registration successfully !!')</script>";
    include 'index.html';
}else{
    echo "Failed : ".mysqli_error($add_result);
}

mysqli_close($conn);
?>