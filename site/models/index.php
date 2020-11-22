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
function loaixe(){
    $sql="SELECT * FROM loai_xe";
    return query($sql);
}
function hangxe(){
    $sql="SELECT * FROM hang_xe";
    return query($sql);
}
function timkiem($hx,$lx){
    if ($hx!="") {
        $shx="xe.Id_hangxe= $hx";
      
    } else {
        $shx="";
    }
    if ($lx!="") {
        $slx="xe.Id_loaixe=$lx";
    } else {
        $slx="";
      
    }
    if ($slx!=""&&$shx!="") {
        $sql="SELECT * FROM `xe` WHERE $shx AND $slx";
    } else {
        $sql="SELECT * FROM `xe` WHERE $shx $slx";
    }
    
    
    return query($sql);
}
?>