<!DOCTYPE html>
<html>
<head>
	<title>LOGIN AS HOSPITAL</title>
	<link rel="stylesheet" type="text/css" href="../loginasdoc/style.css">
</head>
<body>
    
    <center ><h1 style="white;">HOSPITAL LOGIN</h1></center>
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