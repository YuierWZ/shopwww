<?php
include '../lib/mysql.func.php';
function checkAdmin($sql){
    return fetchOne($sql);
    
}