<?php
  session_start();
  if($_SESSION['Auth']==0){
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Database Table</title>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<style type="text/css">
th,td {
 border: 1px solid black;
 font-size: 18;
 font-weight: bold;
}
</style>
</head>
<body style="background-image: url('blueimg.jpg');">
	
	<div class="container">
      			<table class="table table-striped table-hover table-bordered">
				<thead style="background-color: #403B6A; color: white;">
				<tr>
					<th>Date_of_Transaction</th>
					<th>Transaction_Amount</th>
					<th>Type</th>
					<th>Mode_of_Transaction</th>
					<th>Remark</th>
				</tr>
				</thead>
				<tbody>
					<?php 

					$servername= "localhost";
					$username="root";
					$password="";
					$dbname="finance";

					$conn = new mysqli($servername,$username,$password,$dbname);
					if($conn-> connect_error){
						die("Connection failed:".$conn->error);
					}
					$q = $_POST['mytype'];
					echo $q;
					if($q == "credit"){
						$sql = "SELECT Date_of_Transaction, Transaction_Amount, Type, Mode_of_Transaction, Remark FROM transaction WHERE Type='credit'";
					}
					else {
						$sql = "SELECT Date_of_Transaction, Transaction_Amount, Type, Mode_of_Transaction, Remark FROM transaction WHERE Type='debit'";
					}


						$query = mysqli_query($conn, $sql);
						$result = $conn->query($sql);

						if ($result -> num_rows > 0) {
						while($row = mysqli_fetch_array($query)){
						?>

						<tr>
							<td><?php echo $row['Date_of_Transaction']; ?></td>
							<td><?php echo $row['Transaction_Amount']; ?></td>
							<td><?php echo $row['Type']; ?></td>
							<td><?php echo $row['Mode_of_Transaction']; ?></td>
							<td><?php echo $row['Remark']; ?></td>
						</tr>
					
						<?php
						}
					}
					else{
						echo "No results found!";
					}
				

					$conn->close();
					?>

				</tbody>
				</table>
  			</div>
		
	<br><br>

	<!--<a style="margin:100px;" href="viewaccount.php">Click to Go Back</a>-->
</body>
</html>
