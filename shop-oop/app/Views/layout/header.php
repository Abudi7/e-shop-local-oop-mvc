<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= SITENAME ?></title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    /* Some additional styling */
    .navbar-brand {
      font-size: 1.5rem;
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="<?= BASEROOT ?>HomeController"><i class="fas fa-home"></i> Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?= BASEROOT ?>ProductsController/products"><i class="fas fa-box"></i> Products</a>
              </li>
              <li class="nav-item">
                  <?php if(isset($_SESSION['userId'])): ?>
                      <a class="nav-link" href="<?= BASEROOT ?>CustomersController/logout"><i class="fas fa-sign-out-alt"></i> Logout (<?= $_SESSION['name'] ?>)</a>
                  <?php else: ?>
                      <a class="nav-link" href="<?= BASEROOT ?>CustomersController/login"><i class="fas fa-sign-in-alt"></i> Login</a>
                  <?php endif; ?>
              </li>
          </ul>
      </div>
    </div>
  </nav>