
<?php

  //$content = Helper::input_value('c');
  $content = Helper::input_value('c');
  if(!empty($content))
  {
     switch($content)
     {
         case "register":
            include_once("view/register/register.php");
            break;
        case "login":
            include_once("view/login/login.php");
                break;
        case "logout":
            include_once("view/login/logout.php");
                break;
        case "info":
            include_once("view/account/info.php");
                break;
        case "home":
            include_once("view/homepage/home.php");
                break;
        case "detail":
            include_once("view/product/detail.php");
                break;
        case "listprd":
            include_once("view/product/list.php");
                break;
        case "cart":
            include_once("view/cart/cart.php");
                break;
        case "orders":
            include_once("view/orders/orders.php");
                break;
        case "order_detail":
            include_once("view/orders/order_detail.php");
                break;
               
     }
  }
  else
      include_once("view/homepage/home.php");    
?>

<head><title><?php if(!empty($title)){echo $title;}?></title></head>