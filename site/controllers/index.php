<?php
if ($_GET['act']) {
    $act=$_GET['act'];
}else{
    $act="home";
}
switch ($act) {
    case 'home':
        $view="./views/home.php";
        require_once "./views/layout.php";
        break;
    
    default:
        # code...
        break;
}
?>