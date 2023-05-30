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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="msg.css" />
    <title>Connect_Section</title>
  </head>
  <body>
    <section>
      <input type="checkbox" id="menu" style="display: none" />
      <nav>
        <aside>
          <ul>
            <li>
              <label for="menu"><i class="fa fa-bars"></i></label>
            </li>
          </ul>
          <ul>
            <li>
              <a href="#"><i class="fa fa-edit"></i>Compose-mail</a>
            </li>
          </ul>
          <ul>
          <li class="active"><a href="#"><i class="fa fa-envelope-o"></i><span>Inbox</span><i class="fa fa-angle-right"></i></a></li>
              <li><a href="#"><i class="fa fa-paper-plane-o"></i><span>Send</span><i class="fa fa-angle-right"></i></a></li>
              <li><a href="#"><i class="fa fa-comments-o"></i><span>Chat</span><i class="fa fa-angle-right"></i></a></li>
              <li><a href="#"><i class="fa fa-exclamation-triangle"></i><span>Spam</span><i class="fa fa-angle-right"></i></a></li>
              <li><a href="#"><i class="fa fa-archive"></i><span>Archieve</span><i class="fa fa-angle-right"></i></a></li>
              <li><a href="#"><i class="fa fa-trash"></i><span>Trash</span><i class="fa fa-angle-right"></i></a></li>
              <li><a href="#"><i class="fa-solid fa-calendar-days"></i><span>Calander</span><i class="fa fa-angle-right"></i></a></li>
              <li><a href="#"><i class="fa fa-files-o"></i><span>Invoice</span><i class="fa fa-angle-right"></i></a></li>
              </li>
          </ul>
          <ul>
            <li><a href="#"><i class="fa fa-sign-out"></i>Sign out</a></li><spam>
          </ul>
        </aside>
        <header>
            <span>Inbox</span>
            <span>&#124;</span>
            <form action="">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="search">
                

            </form>
            <i class="fa fa-comments"></i>
                <i class="fa fa-bell-o"></i> 
                <i class="fa fa-chevron-down"></i>  
                <img src="icon.png" >
        </header>
      </nav>
      <main>
        <div class="header">
            <input type="checkbox" name="" id="select-all">
            <ul>
                <li>
                    <i class="fa fa-archive"></i>
                </li>
                <li>
                    <i class="fa fa-trash"></i>
                </li>
                <li>
                    <i class="fa fa-exclamation-triangle"></i>
                </li>
            </ul>
            <select name="" id="" class="fa">
                <option value="fa fa-share-alt">&#xf1e0;</option>
                <option value="fa fa-share-square">&#xf14d;</option>
            </select>
            <select name="" id="" class="fa">
                <option value="fa fa-cloud-download">&#xf0ed;</option>
                <option value="fa fa-download">&#xf019;</option>
            </select>
            <select name="" id="" class="fa">
                <option value="fa fa-tags">&#xf02b;</option>
                <option value="fa fa-tags">&#xf02c;</option>
            </select>
        </div>
        <div class="inbox-body">
            <ul>
                <li>
                    <input type="checkbox" name="" class="single-check" id="">
                    <i class="fa fa-star"></i>
                    <img src="user.png">
                    <h5>Kumar Varma</h5>
                    <div>
                        <!-- <h5>Thanking for service</h5> -->
                        <p>I Kumar, thank you for your service. and please give me contact details for more information.It would be helpful Contact details are</p>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" class="single-check" id="">
                    <i class="fa fa-star"></i>
                    <img src="user.png">
                    <h5>Param Sharma</h5>
                    <div>
                        <!-- <h5>Suggestion</h5> -->
                        <p>I cant login since yesterday, Please look into matter and please give me contact details for more information.It would be helpful.ccontact</p>
                    </div>
              </li>
                <li>
                    <input type="checkbox" name="" class="single-check" id="">
                    <i class="fa fa-star"></i>
                    <img src="user.png">
                    <h5>Mrs. Dubey</h5>
                    <div>
                        <!-- <h5>Confirmation email</h5> -->
                        <p>This email is to confirm about the delivery of product has recieved.and please give me contact details for more information.It would </p>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" class="single-check" id="">
                    <i class="fa fa-star"></i>
                    <img src="user.png">
                    <h5>Mr. Kapoor</h5>
                    <div>
                        <!-- <h5>Application for job</h5> -->
                        <p>I have seen you application of Assistance. and please give me contact details for more information.It would be helpful.Contact details </p>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" class="single-check" id="">
                    <i class="fa fa-star"></i>
                    <img src="user.png">
                    <h5>Mr.Khan</h5>
                    <div>
                        <!-- <h5>Thanking for service</h5> -->
                        <p>We thank you for your service, we are recieving good quality of product and please give me contact details for more information. Contact</p>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" class="single-check" id="">
                    <i class="fa fa-star"></i>
                    <img src="user.png">
                    <h5>Mrs.Shweta</h5>
                    <div>
                        <!-- <h5>Complaint Mail</h5> -->
                        <p>The bar code is not working.Please look into matter  and please give me contact details for more information.It would be helpful.Contact </p>
                </li>
                <li>
                    <input type="checkbox" name="" class="single-check" id="">
                    <i class="fa fa-star"></i>
                    <img src="user.png">
                    <h5>MR. Pratham</h5>
                    <div>
                        <!-- <h5>Month Report</h5> -->
                        <p>This is month report of our warehouse. Please check and please give me contact details for more information.It would be helpful</p>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" class="single-check" id="">
                    <i class="fa fa-star"></i>
                    <img src="user.png">
                    <h5>Mrs. Varma</h5>
                    <div>
                        <!-- <h5>Increment In Salary</h5> -->
                        <p>Hello, We read about your inventory on Social media and want to Use the service. Can you please give me contact details for more information.Contact</p>
                    </div>
                </li>
            </ul>
        </div>
      </main>
    </section>
  </body>
  <script
    src="https://kit.fontawesome.com/9dda73680b.js"
    crossorigin="anonymous"
  ></script>
</html>
<script type="text/javascript">
    let select_all=document.getElementById('select-all');
    let single_check=document.getElementsByClassName('single-check');
    select_all.onclick=()=>
    {
        for(let i=0;i<single_check.length;i++)
        {
            if(select_all.checked==true){
single_check[i].checked=true;
            }
            else{
                single_check[i].checked=false;
            }
        }
    }

</script>
