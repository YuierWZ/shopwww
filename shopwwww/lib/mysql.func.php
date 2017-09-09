<?php 
require_once '../include.php';
//链接数据库
function connet()
{
    try {
        $severname = "localhost";
        // $username = "test01";
        // $password = "test01";
        $link = new PDO("mysql:host=$severname;dbname=DB_DBNAME", DB_USER, DB_PWD);
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $link;
}
//插入数据
function insert($table, $array)
{
    try {
        $conn = connet();
        $keys = join(",", array_keys($array));
        $vals = "," . join("", array_values($array)) . ",";
        $sql = "inser into {table} ({$keys}) values({$vals})";
        $result = $conn->exec($sql);
        return $conn->lastInsertId();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
//更新
function update($table, $array, $where = NULL)
{
    try {
        $conn = connet();
        foreach ($array as $key->$val) {
            if ($sep == null) {
                $sep = "";
            } else {
                $sep = ",";
            }
            $str .= $sep . $key . "='" . $val . "'";
        }
        $sql = "update {$table} set {$str}" . ($where == null ?: " where" . $where);
        $result = $conn->exec($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

/* 删除数据 */
function delete($table, $where = null) {
    try {
        $conn = connet ();
        $where = $where == null ? null : " where " . $where;
        $sql = "delete from {$table} {$where}";
        $result = $conn->exec ( $sql );
        return $result;
    } catch ( PDOException $e ) {
        echo '删除数据失败' . $e->getMessage ();
    }
}
/* 得到指定一条记录 */
function fetchOne($sql, $result_type = PDO::FETCH_ASSOC) {
    try {
        $conn=connet();
        $result=$conn->query($sql);
        $row=$result->fetch($result_type);
        return $row;
    } catch ( PDOException $e ) {
        echo '得到指定一条记录失败' . $e->getMessage ();
    }
}

/* 得到所有结果 */
function fetchAll($sql, $result_type = PDO::FETCH_ASSOC) {
    try {
        $conn = connet ();
        $result = $conn->query ( $sql );
        
        while ( @$row = $result->fetch($result_type)) {
            $rows [] = $row;
        }
        return $rows;
    } catch ( PDOException $e ) {
        echo '得到所有结果失败' . $e->getMessage ();
    }
}
/* 得到所有结果条数 */
function getResultNum($sql) {
    try {
        $conn = connet ();
        $result = $conn->query ( $sql );
        $row_count = $result->rowCount ();
        return $row_count;
    } catch ( PDOException $e ) {
        echo '得到所有结果条数失败' . $e->getMessage ();
    }
}

/**
 * 得到上一步插入记录的ID号
 * @return number
 */
function getInsertId(){
    try {
        $conn = connet ();
        return $conn->lastInsertId();
    } catch (PDOException $e) {
        echo '得到上一步插入记录的ID号失败' . $e->getMessage ();
    }
    
}