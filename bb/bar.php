<?php
  $page_title = 'Admin Home Page';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php
 $c_categorie     = count_by_id('categories');
 $c_product       = count_by_id('products');
 $c_sale          = count_by_id('sales');
 $c_user          = count_by_id('users');
 $products_sold   = find_higest_saleing_product('10');
 $recent_products = find_recent_product_added('5');
 $recent_sales    = find_recent_sale_added('5')
?>
<?php include_once('layouts/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcode Generator</title>
    <link rel="stylesheet" href="bar.css">
    <!-- <link rel="stylesheet" href="log.css"> -->
    <script type="text/javascript" src="JsBarcode.all.min.js"></script>
</head>
<style>
    #btn_genrate
    {
        width:100px;
        border: 2px solid rgb(4, 74, 155);
        border-radius: 5px;
        background: #023792;
        color: white;
        

    }
</style>
<body>
    <!-- <p style="background-image: url('wms\ image.jpg');"></p> -->
    <!-- <h4>Add Product detail to generate barcode</h4> -->
    <div class="container">
        <span>Barcode Generator</span>
        
    <input type="text" name="txt" id="txt" placeholder="Enter Package number">
    <button id="btn_genrate"> Barcode</button>
    <br>
    <svg id="barcode"></svg>

    </div>
    
    <script type="text/javascript">
        document.getElementById("btn_genrate").addEventListener('click',function()
        {
            var text=document.getElementById("txt").value;
            JsBarcode("#barcode",text);

        });
    </script>
    
</body>
</html>