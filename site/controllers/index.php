<?php
   require_once "./site/models/index.php"; 
   $loaixe=loaixe();
   $hangxe=hangxe();
  $act = "index";//chức năng mặc định
  if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
  switch ($act) {
    case "index":
        $showxe=showxe();
        $view="./site/views/home.php";
        require_once "./site/layout.php";
    break;
    case 'timkiem':
      if (isset($_POST['hx'])) {
        $hx=$_POST['hx'];
      } else {
        $hx="";
      }
      if (isset($_POST['lx'])) {
        $lx=$_POST['lx'];
      } else {
        $lx="";
      }
      
      $timkiem=timkiem($hx,$lx);
      $view="./site/views/timkiem.php";
      require_once "./site/layout.php";
     
    break;
    case "ctxe":
      $idxe=$_GET['idxe'];
      $ctxe=ctxe($idxe);
      $bl=getbinhluan($idxe);
      $manganh=anhxe($ctxe['image_list']);
      $view="./site/views/ctxe.php";
      require_once "./site/layout.php";
    break;
    case "thembl":
      $id_nguoidung=$_SESSION['id'];
      $id_xe=$_POST['id'];
      $cmt=$_POST['comment'];
      $ngay=date('y/m/d');
      thembl($id_nguoidung,$id_xe,$cmt,$ngay);
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