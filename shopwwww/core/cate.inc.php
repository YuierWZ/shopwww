<?php
$table="www_cate";
/**
 * 添加分类的操作
 * @return string
 */
function addCate(){
    $arr=$_POST;
    if(insert("www_cate",$arr)){
        $mes="分类添加成功!<br/><a href='addCate.php'>继续添加</a>|<a href='listCate.php'>查看分类</a>";
    }else{
        $mes="分类添加失败！<br/><a href='addCate.php'>重新添加</a>|<a href='listCate.php'>查看分类</a>";
    }
    return $mes;
}