<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center" style="height:450px;background-image: url('IMCC.jpeg');background-repeat: no-repeat; background-size: cover;">
         <h1 style="color:white">Welcome User <hr> IMCC Inventory Management System</h1>
         <br><br>
         <p style="color:white;font-size:15px">Browes around to find out the pages that you can access!</p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
