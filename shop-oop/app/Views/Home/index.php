<?php require APPROOT.'/Views/layout/header.php';?>
<!-- Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-danger"> Home Page </h2>
      <?php if($_SESSION['name']) {?> 
       <p>Welcome <?= $_SESSION['name'] ?></p> 
      <?php }else{ ?>
         <p>Please Login first if you don't have account <a href="<?= BASEROOT ?>CustomersController/login">Login</a> </p>  
      <?php } ?>
    </div>
  </div>
</div>
<?php require APPROOT.'/Views/layout/footer.php';?>