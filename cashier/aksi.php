<?php

//action.php

session_start();

if(isset($_POST["action"]))
{
 if($_POST["action"] == "add")
 {
  if(isset($_SESSION["shopping_cart"]))
  {
   $is_available = 0;
   foreach($_SESSION["shopping_cart"] as $keys => $values)
   {
    if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])
    {
     $is_available++;
     $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];
    }
   }
   if($is_available == 0)
   {
    $item_array = array(
     'kode_barang'               =>     $_POST["kode_barang"],  
     'judul_buku'             =>     $_POST["judul_buku"],  
     'harga_jual'            =>     $_POST["harga_jual"],  
    );
    $_SESSION["shopping_cart"][] = $item_array;
   }
  }
  else
  {
   $item_array = array(
    'kode_barang'               =>     $_POST["kode_barang"],  
    'judul_buku'             =>     $_POST["judul_buku"],  
    'harga_jual'            =>     $_POST["harga_jual"],  
   );
   $_SESSION["shopping_cart"][] = $item_array;
  }kode_barang