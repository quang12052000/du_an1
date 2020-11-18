<?php
require_once "./site/models/database.php";
function showxe(){
$sql="SELECT * FROM `xe`";
return query($sql);
}
function ctxe($id){
    $sql="SELECT * FROM `xe` INNER JOIN loai_xe ON loai_xe.Id_loaixe=xe.Id_loaixe WHERE id_xe=$id";
    return queryOne($sql);
}
function checkdn($user,$pass){
    $sql="SELECT * FROM nguoi_dung WHERE ten_dangnhap='$user' AND mat_khau='$pass'";
    return queryOne($sql);
}
?>