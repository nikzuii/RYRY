<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>RyRy’s Café Login</title>
  
  <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/madelyn-2" rel="stylesheet">
  <link rel="stylesheet" href="login.css" type="text/css">

</head>

<body>

  <div class="left-panel">
    <div class="header-logo">
      <img src="images/logo.png" alt="RyRy’s Café Logo">
      <h1>RyRy’s Café</h1>
    </div>

    <div class="login-container">
      <div class="user-icon">
        <img src="images/user.png" alt="User Login Logo"  class="user-image">
      </div>
      <h2>USER LOGIN</h2>
      <p class="welcome-message">Welcome back Time for your perfect blend. Let's start the day. ☕︎</p>
      
      
      <form method="POST" action="login.php">

        <input type="text" placeholder="👤 | Username" name="username" required>
        <input type="password" placeholder="🔐 | Password" name="password" required>

        <button type="submit">Login</button>

      </form>
    </div>
</body>
</html>
