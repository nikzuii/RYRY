<?php include('authcheck.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>RyRy’s Café Admin</title>
  
  <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/madelyn-2" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

  <link rel="stylesheet" href="admin.css" type="text/css">
</head>

<body>
  <nav>
    <ul>
      <li class="logo"><img src="images/logo.png" alt=""></li>
      <h1>Welcome, <?=htmlspecialchars($_SESSION['username'])?> (<?=htmlspecialchars($_SESSION['role'])?>)</h1>
      <li><a href="products.php"><i class="fa-solid fa-mug-hot"></i>&nbsp Products</a></li>
      <li><a href="ingredients.php"><i class="fa-solid fa-box"></i>&nbsp Stock</a></li>
      <li><a href="recipes.php"><i class="fa-solid fa-file-lines"></i>&nbsp Reports</a></li>
      <li><a href="staff.php"><i class="fa-solid fa-users"></i>&nbsp Staff Accounts</a></li>
      <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp Log Out</a></li>
    </ul>
  </nav>
  
</body>
</html>