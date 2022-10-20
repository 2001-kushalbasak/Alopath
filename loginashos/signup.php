
<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP AS HOSPITAL</title>
	<link rel="stylesheet" type="text/css" href="../loginasdoc/style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>HOSPITAL SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Hospital Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>Hospital User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
         
         <label>Full Address</label>
          <?php if (isset($_GET['add'])) { ?>
               <input type="text" 
                      name="add" 
                      placeholder="Address"
                      value="<?php echo $_GET['add']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="add" 
                      placeholder="Address"><br>
          <?php }?>



     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>