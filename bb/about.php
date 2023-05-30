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
    <title>About Us</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="https://fonts.google.com/specimen/Josefin+Sans?query=josefin">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --> 
    <!-- <link rel="stylesheet" href="about.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet"> -->
    </head>
    <body>
    <section class="text-gray-600 body-font">
        <h1 class="choose">Binary bosses Presents</h1>
        <h1 class="choose">Binary-WMS</h1>
            <div class="flex flex-col sm:flex-row mt-10">
                <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                  <!-- <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                      <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </div> -->
                  <div class="flex flex-col items-center text-center justify-center">
                    <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">About Binary-WMS</h2>
                    <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                    <p class="text-base">Created By Binary-Bosses.</p>
                  </div>
                </div>
                <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-black-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-left sm:text-left lh-base">
                  <p class="leading-relaxed text-lg text-black mb-4"> 

                    The binary warehouse management system is designed to streamline operations in the warehousing industry.<br> The system features a home page, where operators can keep track of their employees, as well as view sales and financial reports for each product in the warehouse. <br>Each product has its own product information page that includes  descriptions of each item.<br> Each product enters through an online form to minimize paperwork.<br> Sales are tracked using a barcode generator that produces barcodes for each item sold so sales representatives know exactly what was being shipped at any given time.
                    
                    <br>Binary warehouse management system is a software that enables retailers to easily manage inventory of various types of products.
                    </p>
               
                  
                </section>
                <h1 class="choose">Why Choose Us?</h1>
          <ul class="cards">
            <li>
              <a href="" class="card">
                <img src="Employee.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                  <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                    <img class="card__thumb" src="icons8-collaborator-male-40.png" alt="" />
                    <div class="card__header-text">
                      <h3 class="card__title">Employee Management</h3>            
                     
                    </div>
                  </div>
                  <p class="card__description">The system features an Employee page where operators can keep track of their employees.
                </p>
                </div>
              </a>      
            </li>
            <li>
              <a href="" class="card">
                <img src="Mario barcode.jpg" class="card__image" alt="" />
                <div class="card__overlay">        
                  <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                    <img class="card__thumb" src="icons8-barcode-60.png" alt="" />
                    <div class="card__header-text">
                      <h3 class="card__title">Barcode System</h3>
                     
                    </div>
                  </div>
                  <p class="card__description">
                    Barcode would be assigned to every product which enters the inventory hence It will help to make tracking of goods easy.
                    </p>
                </div>
              </a>
            </li>
            <li>
              <a href="" class="card">
                <img src="Mario Sale.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                  <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                    <img class="card__thumb" src="icons8-financial-growth-analysis-64.png" alt="" />
                    <div class="card__header-text">
                      <h3 class="card__title">Sales page</h3>
                      <span class="card__tagline">Get your Sales Report ready!</span>            
                     
                    </div>
                  </div>
                  <p class="card__description">Sales Page helps to add detail of sale accordingly and all the data can be stores in the sale and also reports can be generated.</p>
                </div>
              </a>
            </li>
            <!-- <li>
              <a href="" class="card">
                <img src="boukaih-2AsfYaYTbpI-unsplash.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                  <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                    <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                    <div class="card__header-text">
                      <h3 class="card__title">kim Cattrall</h3>
                      <span class="card__status">3 hours ago</span>
                    </div>          
                  </div>
                  <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
              </a>
            </li>     -->
          </ul>
         
        </div>
      
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" ></script> -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>