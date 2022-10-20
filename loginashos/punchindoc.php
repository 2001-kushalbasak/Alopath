<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>PUNCH IN DOCTORS</title>
	<link rel="stylesheet" type="text/css" href="../loginasdoc/style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
    <table id="table">
        <center><h1>Select Type Of Doctor</h1></center>
        
        <tr>
            <td colspan="4">
            </td>
        </tr>
        <tr>
            <td>
                <div class="div1">
                    <img src="../img/plant%20(1).png" style="width: 30%;" />
                    <p>Cardiology</p>
                    <button class="btn btn1"><a href="selectspl/card.php" style="color: white;">Click Here</a></button>
                    <br /><br />
                </div>
            </td>
            <td>
                <div class="div1">
                <img src="../img/kidneys.png" style="width: 30%;" />
                <p>Nephrology</p>
                 <button class="btn btn1"><a href="selectspl/neph.php" style="color: white;">Click Here</a></button>
                <br /><br />
                </div>
            </td>
            
        
        </tr> 
        <tr>
            <td colspan="4">&nbsp;</td>
        </tr>
    </table>
</body>

</html>

