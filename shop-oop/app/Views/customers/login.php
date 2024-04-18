<?php require APPROOT.'/Views/layout/header.php';?>
<!-- Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-danger"> Login Page </h2>
      <div class="row">
        <div class="col-md-10">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out <span><a class="link-offset-2 link-underline link-underline-opacity-0" href="<?= BASEROOT ?>CustomersController/register"> Sign up</a></span></label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require APPROOT.'/Views/layout/footer.php';?>