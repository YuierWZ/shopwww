<?php
session_start();
require_once '../lib/image.func.php';
require_once '../lib/common.func.php';
require_once '../lib/string.func.php';
require_once '../lib/page.func.php';
require_once "../configs/configs.php";
require_once '../core/admin.inc.php';
// require_once '../core/cate.inc.php';
// require_once '../core/pro.inc.php';
// require_once '../core/album.inc.php';
require_once '../lib/upload.func.php';
// require_once '../core/user.inc.php';
$username=$_POST['username'];
$password=$_POST['password'];
$verify=$_POST['verify'];
$verify1 = $_SESSION['verify'];
if($verify==$verify1){
    $sql="select * from www_admin where username='{$username}' and password='{$password}'";
    $row=checkAdmin($sql);
    if($row){
        $_SESSION['adminName']=$row['username'];
        alertMes("登录成功", "index.php");
    }else {
        alertMes("登录失败，重新登录", "login.php");
    }
}else {
    alertMes("验证码错误", "login.php");
}