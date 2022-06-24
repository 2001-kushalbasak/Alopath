    <?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="dist/jquery.tabledit.js"></script>
    
</head>
<body class="bg-info">
    <center>
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
    <a href="logout.php">Logout</a>
    </center>
    <br>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>