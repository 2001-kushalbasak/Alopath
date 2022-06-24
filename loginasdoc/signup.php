
<!DOCTYPE html>
<html>
<head>
	<title>doctor SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>DOCTOR SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Doctor Name</label>
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

          <label>Doctor User Name</label>
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

         <label>Qualification</label>
          <?php if (isset($_GET['qual'])) { ?>
               <input type="text" 
                      name="qual" 
                      placeholder="Qualification"
                      value="<?php echo $_GET['qual']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="qual" 
                      placeholder="Qualification"><br>
          <?php }?>
         
         
         <label>Specialisation</label>
          <?php if (isset($_GET['spcl'])) { ?>
               <input type="text" 
                      name="spcl" 
                      placeholder="Specialisation"
                      value="<?php echo $_GET['spcl']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="spcl" 
                      placeholder="Specialisation"><br>
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