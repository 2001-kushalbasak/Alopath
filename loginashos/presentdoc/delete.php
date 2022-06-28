<?php
include ("../../loginasdoc/db_conn.php");

$id= $_GET['id'];

$query= "DELETE FROM `doc_temp_list` WHERE id = $id";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>

<meta http-equiv="refresh" content = "0; url = http://localhost/final/display.php" />

<?php
}else{
    echo "failed"; 
}
?>