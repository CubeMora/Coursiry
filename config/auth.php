<?php
session_start();
include "connection.php";

$user = $_POST["user"];
$pass = $_POST["pass"];

$result = $mysql->prepare("SELECT username, email FROM users WHERE username = ? AND pass = ?");
$result->bind_param("ss", $user, $pass);
$result->execute();

$result->bind_result($user_result, $email_result);
$result->fetch();
//$rows = $result->fetch_all(MYSQLI_ASSOC);

var_dump($user_result,$email_result);

if ($user_result != null){
    //valid user
    $_SESSION["auth"] = $user;
    echo "Success!";
    header("Location:../cms/userform.php");
}else{
    //invalid user
    session_destroy();
}


?>