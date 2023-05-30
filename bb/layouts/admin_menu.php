<!-- google translate script 1-->
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

<!-- Call back function 2 -->
<script type="text/javascript">
	function loadGoogleTranslate() {
		new google.translate.TranslateElement('google_translate_element');
	}
</script>

<ul>
<div id="google_translate_element"></div>
  <li>
    <a href="admin.php">
      <i class="glyphicon glyphicon-briefcase"></i>
      <span>Home</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-user"></i>
      <span>Employee</span>
    </a>
    <ul class="nav submenu">
    <li><a href="group.php">Manage Groups</a> </li>
      <li><a href="users.php">Users</a></li>
   </ul>
  </li>
  <li>
    <a href="categorie.php" >
      <i class="glyphicon glyphicon-indent-left"></i>
      <span>Info</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-shopping-cart"></i>
      <span>Goods</span>
    </a>
    <ul class="nav submenu">
       <li><a href="product.php">Goods Info</a> </li>
       <li><a href="add_product.php">Add Goods</a> </li>
   </ul>
  </li>
  <li>
    <a href="messagebox.php" >
      <i class="glyphicon glyphicon-envelope"></i>
      <span>Connect</span>
    </a>
  </li>
  <li>
  <li>
    <a href="bar.php" >
      <i class="glyphicon glyphicon-barcode"></i>
      <span>Code generator</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-usd"></i>
       <span>Sales</span>
      </a>
      <ul class="nav submenu">
         <li><a href="sales.php">Sales Info</a> </li>
         <li><a href="add_sale.php">Addition of Sale</a> </li>
     </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-list-alt"></i>
       <span>Sales Report</span>
      </a>
      <ul class="nav submenu">
        <li><a href="monthly_sales.php">Monthly sales</a></li>
        <li><a href="daily_sales.php">Daily sales</a> </li>
        <li><a href="sales_report.php">Sales Report datewise</a></li>
      </ul>
  </li>
  <li>
    <a href="about.php" >
      <i class="glyphicon glyphicon-exclamation-sign"></i>
      <span>About</span>
    </a>
  </li>
</ul>
