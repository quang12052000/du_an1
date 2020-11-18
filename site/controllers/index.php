<?php
   require_once "./site/models/index.php"; 
  $act = "index";//chức năng mặc định
  if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
  switch ($act) {
    case "index":
        $showxe=showxe();
        $view="./site/views/home.php";
        require_once "./site/layout.php";
    break;
    case "ctxe":
      $idxe=$_GET['idxe'];
      $ctxe=ctxe($idxe);
      $view="./site/views/ctxe.php";
      require_once "./site/layout.php";
    break;
    case "login1":
      require_once "./site/views/login.php";
    
    break;
    case "login":
      $user=$_POST['user'];
      $pass=$_POST['pass'];
    $check=checkdn($user,$pass);
    if (is_array($check)) {
      $_SESSION['user']=$user;
      $_SESSION['id']=$check['Id_nguoidung'];
      header("location: index.php");
    }else{
      header("location: index.php?act=login");
    }
  break;
  case "logout":
    unset($_SESSION['user']);
    unset($_SESSION['id']);
    header("location: index.php");
  }
?>