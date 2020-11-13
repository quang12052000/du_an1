<?php
require_once "./site/models/database.php";
function showxe(){
$sql="SELECT * FROM `xe`";
return query($sql);
}
function ctxe($id){
    $sql="SELECT * FROM `xe` WHERE id_xe=$id";
    return queryOne($sql);
}
?>