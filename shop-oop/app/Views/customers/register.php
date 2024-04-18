<?php require APPROOT . '/Views/layout/header.php'; ?>
<!-- Content -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center">User Registration</h2>
      <form action="<?= BASEROOT ?>CustomersController/register" method="POST">
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text" class="form-control" id="firstname" name="firstname" required>
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" class="form-control" id="lastname" name="lastname" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label for="confirm_password">Confirm Password</label>
          <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>
        <!--<div class="form-group">
          <label for="role">Role</label>
          <select class="form-control" id="role" name="role" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div>-->
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
  </div>
</div>
<?php require APPROOT . '/Views/layout/footer.php'; ?>