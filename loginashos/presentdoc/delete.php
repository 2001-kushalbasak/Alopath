<?php
include ("../../loginasdoc/db_conn.php");

$id= $_GET['doc_id'];

$query= "DELETE FROM `doc_temp_list` WHERE doc_un_id = $id";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>

<meta http-equiv="refresh" content = "0; url = http://localhost/project/loginashos/punchindoc.php" />

<?php
}else{
    echo "failed"; 
}
?>