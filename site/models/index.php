<?php
require_once "./site/models/database.php";
function showxe(){
$sql="SELECT * FROM `xe`";
return query($sql);
}
?>