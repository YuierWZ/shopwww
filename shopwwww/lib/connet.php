<?php
function connet()
{
    try {
        $severname = "localhost";
        // $username = "test01";
        // $password = "test01";
        $link = new PDO("mysql:host=$severname;dbname=shopwww", DB_USER, DB_PWD);
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $link;
}