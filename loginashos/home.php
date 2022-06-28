<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hospital Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../loginasdoc/style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

    <body>  
    <h1>Hello,<?php echo $_SESSION['name']; ?></h1>
    <h1>User Name:<?php echo $_SESSION['user_name']; ?></h1>
    <h1>Un Id:<?php echo $_SESSION['hos_un_id']; ?></h1>
        
        <?php
    $un= $_SESSION['hos_un_id']; 
        ?>
    <a href="logout.php">Logout</a>
        
    <table id="table">
        
        <tr>
            <td colspan="4">
            </td>
        </tr>
        <tr>
            <td>
                <div class="div1">
                    <img src="../img/2.jpg" style="width: 40%;" />
                    <p>Push In Doctors <?php echo $un ?></p>
                    <button class="btn btn1"><a href="punchindoc.php" style="color: white;">Click Here</a></button>
                    <br /><br />
                </div>
            </td>
            <td>
                <div class="div1">
                <img src="../img/2.jpg" style="width: 40%;" />
                <p>Give Feedback to the Doctors</p>
                <button class="btn btn2">Category 2</button>
                <br /><br />
                </div>
            </td>
            
            <td>
                <div class="div1">
                <img src="../img/2.jpg" style="width: 40%;" />
                <p>Present Doctors </p>
              
                    <button class="btn btn1"><a href='presentdoc/presentdoc.php?un_id=<?php echo $un?>'style="color: white;">Click Here</a></button>
            
            
                <br /><br />
                </div>
            </td>
       
        <tr>
            <td colspan="4">&nbsp;</td>
        </tr>
    </table>
</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>