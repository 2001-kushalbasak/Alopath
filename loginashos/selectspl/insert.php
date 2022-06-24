<?php
include ("../../loginasdoc/db_conn.php");

$id= $_GET['id'];
$hosid= $_GET['hosid'];
$hosname= $_GET['hosname'];


echo $hosname;

$query="INSERT INTO doc_temp_list(id,name,doc_un_id,qualification,specialization,hos_un_id,hospi_name) SELECT id,name,doc_un_id,qualification,specialization,$hosid,'$hosname' FROM doc_list WHERE id = '$id' ";

$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Record Inserted')</script>";
    ?>
<meta http-equiv="refresh" content = "0; url = http://localhost/project/loginashos/punchindoc.php" />
<?php
}else{
   echo "<script>alert('Wrong Insertion')</script>";
    ?>
  
<meta http-equiv="refresh" content = "0; url = http://localhost/project/loginashos/punchindoc.php" />
<?php
}
?>