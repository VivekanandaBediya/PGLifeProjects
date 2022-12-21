<?php
include 'DB_Connection.php';

if(isset($_POST['lsbutton'])){
    $l_email = $_POST['email'];
    $l_pass = $_POST['passwrd'];
}
else{
    echo "Failed :".mysqli_error($conn);
}

$db_pass = "SELECT PASS FROM PGLife_Users WHERE EMAIL = '$l_email'";
$result = mysqli_query($conn,$db_pass);



while($row = mysqli_fetch_assoc($result)){
    if(password_verify($l_pass,$row['PASS'])){
        echo "<script>alert('Welcome to the Guest Room !!')</script>";
        header("property_list.html");
    }else{
        echo "Not valid";
    }
}

mysqli_close($conn);
?>