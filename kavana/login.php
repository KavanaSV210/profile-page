<?php
$con = mysqli_connect('localhost', 'root', '','users');

$uname = $_POST['username'];
$pass = $_POST['password'];
if(empty($uname)){
    echo "User name is required";
}else{
    $sql = "SELECT * FROM userdata WHERE username='$uname' AND txtpassword= '$pass'";

    $result = mysqli_query($con, $sql);
}

if(mysqli_num_rows($result)===1){
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $uname && $row['txtpassword']===$pass){
        header("Location: profile.php");
    exit();
    }
    else{
        header("Location: login.html");
        exit();
    }
}
else{
    header("Location: login.html");
    exit();
}

?>