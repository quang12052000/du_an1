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
    
  }

?>