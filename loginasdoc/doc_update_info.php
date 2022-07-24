<?php include("db_conn.php");
error_reporting(0);
$d_id= $_GET['d_un_id'];
$d_name=$_GET['d_name'];
$qual=$_GET['qual'];

$query= "SELECT * FROM doc_list where doc_un_id = '$d_id'";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: skyblue;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="#" method="POST">
  <div class="container">
    <h1>Update Information</h1>
    <p>Update Information</p>
    <hr>

    <label>Name</label>
    <input type="text" value="<?php echo $result['name']; ?>" class ="input" name="name" required>

    <label></label>
    <input type="text" value="<?php echo $result['qualification']; ?>" class ="input" name="qual" required>

    
    <hr>
    <p>By clicking on Update you will be changing the details permanently  <a href="#"> Terms & Privacy</a>.</p>

    <div class="input_field">
      <input type="submit" value="Update Details" class="btn"
             name = "update">
      </div>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>


<?php
    if($_POST['update'])
    {
        $name = $_POST['name'];
        $qual = $_POST['qual'];
        
        
        $query = "UPDATE  doc_list set name= '$name',qualification= '$qual' WHERE doc_un_id = '$d_id'";
    
           $data =mysqli_query($conn,$query);
        
           if($data)
           {
               echo "<script>alert('Record Updated')</script>";
               ?>

            <meta http-equiv="refresh" content = "0; url = http://localhost/project/loginasdoc/lasdoc.php" />
           

            <?php
            }
           else
           {
               echo "Failed to Update";
           }
    }
           
           ?>