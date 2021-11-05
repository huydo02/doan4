<?php
  //$content = Helper::input_value('c');
  $content = Helper::input_value('c');
  if(!empty($content))
  {
     switch($content)
     {
         case "statistic":
            include_once("view/statistic/statistic.php");
            break;
         case "addcat":
            include_once("view/category/add.php");
            break;
         case "editcat":
            include_once("view/category/edit.php");
            break;
         case "deletecat":
            include_once("view/category/delete.php");
            break;   
         case "listcat":
               include_once("view/category/list.php");
               break;
         case "addprd":
               include_once("view/product/add.php");
               break;       
         case "editprd":
               include_once("view/product/edit.php");
               break;       
         case "deleteprd":
               include_once("view/product/delete.php");
               break;       
         case "listprd":
               include_once("view/product/list.php");
               break; 
         case "findprd":
               include_once("view/product/find.php");
               break; 
               case "orders":
                  include_once("view/orders/orders.php");
                  break;       
            case "orderdetail":
                  include_once("view/orders/order_detail.php");      
                         
     }
  }
  else
      include_once("view/category/list.php");
