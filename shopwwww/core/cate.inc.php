<?php
$table = "www_cate";

/**
 * 添加分类的操作
 * 
 * @return string
 */
function addCate()
{
    $arr = $_POST;
    if (insert("www_cate", $arr)) {
        $mes = "分类添加成功!<br/><a href='addCate.php'>继续添加</a>|<a href='listCate.php'>查看分类</a>";
    } else {
        $mes = "分类添加失败！<br/><a href='addCate.php'>重新添加</a>|<a href='listCate.php'>查看分类</a>";
    }
    return $mes;
}

// function getAllCateByPage(){

// }
function getCateById($id)
{
    $sql = "select id,cName from www_cate where id={$id}";
    return fetchOne($sql);
}

function editCate($where)
{
    $arr = $_POST;
    if (update("www_cate", $arr, $where)) {
        $mes = "分类修改成功!<a href='listCate.php'>查看分类</a>";
    } else {
        $mes = "分类修改失败!<a href='listCate.php'>请重新修改</a>";
    }
    return $mes;
}