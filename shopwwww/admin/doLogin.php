<?php
require_once '../include.php';
$username=$_POST['username'];
$password=md5($_POST['paswword']);
$verify=$_POST['verify'];
$verify1=$_SESSION['verify'];
if($verify==$verify1){
    $sql="select * from wwww_shop where username='{$username}' and password='{$password}'";
    $res=checkAdmin($sql);
    print_r($res);
}else {
    echo "<script>alert('验证码错误');</script>";
    echo "<script>window.location='login.php';</script>";
}