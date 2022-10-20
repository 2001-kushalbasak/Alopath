<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<?php
    $un= $_SESSION['hos_un_id']; 
        ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOSPITAL DASHBOARD(<?php echo $un; ?>)</title>
	<link rel="stylesheet" type="text/css" href="../loginasdoc/style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    
    <a href="https://www.flaticon.com/free-icons/doctors" title="doctors icons">Doctors icons created by Slidicon - Flaticon</a>
</head>

    <body>  
    <h1>Welcome!! <?php echo $_SESSION['name']; ?></h1>
    <h1>User Name:<?php echo $_SESSION['user_name']; ?></h1>
    <h1>Unique Id:<?php echo $_SESSION['hos_un_id']; ?></h1>
        
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
                    <img src="../img/pushin.png" style="width: 30%;" />
                    <p style="font-size:140%;">Push In Doctors <?php echo $un ?></p>
                    <button class="btn btn1"><a href="punchindoc.php" style="color: white;">Click Here</a></button>
                    <br /><br />
                </div>
            </td>
            
            <td>
                <div class="div1">
                <img src="../img/doctors.png" style="width: 30%;" />
                <p style="font-size:140%;">Present Doctors in <?php echo $un ?> </p>
              
                    <button class="btn btn1"><a href='presentdoc/presentdoc.php?un_id=<?php echo $un?>'style="color: white;">Click Here</a></button>
            
            
                <br /><br />
                </div>
            </td>
            
            <!---
             <td>
                <div class="div1">
                <img src="../img/2.jpg" style="width: 40%;" />
                <p>Coming Soon</p>
                    
                <button class="btn btn2">Category 2</button>
                <br /><br />
                </div>
            </td>
           
       

---->
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