<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<html>
<head>
    <title>REGISTERED NEPHROLOGITS</title>
    <style>
    body
        {
            background: skyblue;
        }
        table{
        
                background-color: white;
        }
        .insert
        {
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 23px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }
        
        h5{
        width: 0ch;
        overflow: hidden;
        white-space: nowrap;
        animation: text 2s steps(55) infinite;
        border-right: 2px solid black;
        color: red;
        font-family: sans-serif;
    }
    @keyframes text{
        0%{
            width: 0ch;
        }
        50%{
            width: 65ch;
        }
    }
        
    
    </style>
    </head>

<?php
    
    $hos_un_id = $_SESSION['hos_un_id'];
    $hos_name= $_SESSION['name'];

    
include("../../loginasdoc/db_conn.php");

$query = "SELECT * FROM `doc_list` WHERE specialization ='nephro'";
$data =mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total !=0)
{
    ?>

<h2 style="font-size:240%;" align="center"><mark>List Of Nephrologists</mark></h2>
<center><h5>Alopath.com All RIghts Rserved Copyright</h5></center>

<table align="center" border="3" cellspacing="7" width="72%">

<th width="2%">id</th>
<th width="30%">name</th>
<th width="5%">Doctor unique id</th>
<th width="5%">qualification</th>
<th width="2%">specialization</th>
<th width="2%">image</th>
<th width="2%">Operation</th>

<?php
    while($result = mysqli_fetch_assoc($data))
    {
        
        echo "<tr>
        <td>".$result['id']."</td>
        <td>".$result['name']."</td>
        <td>".$result['doc_un_id']."</td>
        <td>".$result['qualification']."</td>
        <td>".$result['specialization']."</td>
        <td>".$result['image']."</td>
        

        <td><a href='insert.php?id=$result[id] &hosid=$hos_un_id &hosname=$hos_name'><input type='submit' value='Insert' class='insert'></a>
        
        </td>
        
        </tr>";
    }
}
else{
    echo "no records";
}
?>
</table>
    <br>
        
</html>
<?php
}
?>
