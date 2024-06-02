<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    // User is already logged in, redirect them to the home page
    header("Location: home.php");
    exit();
}

// Check if there's a success message in the URL
if (isset($_GET['success'])) {
    $success_message = $_GET['success'];
    echo "<script>alert('$success_message');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="./assets/style2.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>