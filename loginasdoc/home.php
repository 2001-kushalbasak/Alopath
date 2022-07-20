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
    <style>
    
    .update
        {
            background-color: orange;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 23px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }
        
        .logout
        {
            background-color: greenyellow;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 23px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }
        
    
    
    
    </style>
</head>
<body class="bg-info">
    <center>
        <br>
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <h1>Username:, <?php echo $_SESSION['user_name']; ?></h1>
        <h1>Unique Id <?php echo $_SESSION['doc_un_id'];?></h1>
        
        
        <?php
    $unique_id= $_SESSION['doc_un_id'];
    $name_doc=$_SESSION['name'];
    $qual=$_SESSION['qualification'];
    ?>
    <a href="logout.php"><input type='submit' value='Log Out' class='logout'></a>
        
        <a href='doc_update_info.php?d_un_id=<?php echo $unique_id ?> &d_name=<?php echo $name_doc ?> &qual=<?php echo $qual ?>'><input type='submit' value='Update' class='update'></a>
        
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