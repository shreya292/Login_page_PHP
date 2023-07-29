<?php
   @include 'config.php';
   session_start();
   if(!isset($_SESSION['user_name'])){
      header('location:login_form.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="container">
   <div class="content">
         <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
         <p>This is a User page</p>
         <div class="dashboard-welcome">Welcome to the Dashboard</div>
         <div class="dashboard-actions">
            <a href="#" class="dashboard-action">Orders</a>
            <a href="register_form.php" class="dashboard-action">Register</a>
            <a href="login_form.php" class="dashboard-action">Login</a>
            <a href="logout.php" class="dashboard-action logout">Logout</a>
         </div>
   </div>
</div>

</div>

</body>
</html>