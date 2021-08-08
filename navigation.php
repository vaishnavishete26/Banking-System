<!-- nav section starts here -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Banking System</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/customer.css">
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel = "icon" href = "image/logo.png" type = "image/x-icon">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #dfe4ea;">
    <div class="container-fluid">
       <a class="navbar-brand logo" href="index.php"><image src="image/logo.png" alt="logo" height=50px width=50px >Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item btn btn-secondary">
            <a class="nav-link text-white" href="index.php"style="color:yellow;">Home</a>
          </li>
          <li class="nav-item btn btn-secondary">
            <a class="nav-link text-white" href="transfer_money.php"style="color:yellow;">View Customers</a>
          </li>
          <li class="nav-item btn btn-secondary">
            <a class="nav-link link-text text-white" href="transaction_history.php"style="color:yellow;">Customers Transaction History</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>