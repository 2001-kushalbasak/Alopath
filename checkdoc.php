<?php
$hos_id= $_GET['id'];
$hosname=$_GET['hosn'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserPannel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="margin: 50px;">
    <center><h1><?php echo $hosname ?></h1></center>
    <h1>Live Status of Doctors Present.....</h1>
    <br>
    <table class="table">
        <thead>
			<tr>
				<th>Doctor Name</th>
                <th>qualification</th>
                <th>specialization</th>
                
			</tr>
		</thead>

        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "alopath";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}
            
            
            // read all row from database table
			$sql = "SELECT * FROM doc_temp_list Where hos_un_id = $hos_id";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row["name"] ."</td>
                    <td>".$row["qualification"]."</td>
                    <td>".$row["specialization"]."</td>
                    
                </tr>";
            }
            $connection->close();
            ?>
        </tbody>
    </table>
</body>
</html>