<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<link rel="stylesheet" href="log.css">
<!-- google translate script 1-->
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

<!-- Call back function 2 -->
<script type="text/javascript">
	function loadGoogleTranslate() {
		new google.translate.TranslateElement('google_translate_element');
	}
</script>
<div class="row">
  <div class="col-md-12">
    
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Welcome to our Inventory Management System </h1>
         <p>This is Binary bosses</p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
