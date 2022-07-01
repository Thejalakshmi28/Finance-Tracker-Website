<!--<?php 

 $servername= "localhost";
 $username="root";
 $password="";
 $dbname="finance";

$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
   die("Connection failed:".$conn->error);
 }
if(isset($_POST['submit'])){
    $fromdate= $_POST['fdate'];
    $todate= $_POST['todate'];
    $sql = "Select Date_of_Transaction, Transaction_Amount, Type, Mode_of_Transaction, Remark From transaction Where joindate Between '$fromdate' and '$todate' order by joindate";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);
}

?>-->
<?php
  session_start();
  if($_SESSION['Auth']==0){
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
  <!--  <link rel="stylesheet" href="styles.css">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<style type="text/css">
input[type=date]{
    font-weight: 400;
    border: 1px solid black;
}
</style>
</head>
<body style="background-color: hsl(18, 7%, 65%); background-image: url('blueimg.jpg');">
    <br><br><br>
<?php 
  $filter=$_POST["filter"];
  if($filter=='bydate'){ ?>

    <div class="container" style="margin-top: 50px; width: 700px;">
        <div class="jumbotron">
            <div class="card" style="background-color: #CFCAF5; box-shadow: 10px 10px black;">
                <div class="card-body" style="border: 10px solid white;">
    <h2 align="center" style="color: #403B6A; text-shadow: 4px 5px 4px grey;">Fetch Data Between Two Dates</h2><br>
	<form align="center" action="dbsearch.php" method="POST">
	<div class="mb-3">
        <label style="font-weight: 500;" for="fdate">From Date</label>
        <input id="fdate" type="date" name="fdate" required><br><br>
    </div>
    <div class="mb-3">
     <label style="font-weight: 500;" for="todate">To Date</label>
     <input id="todate" type="date" name="todate" required><br><br>
 </div>
     <input class="button btn btn-primary" style="background-color: #403B6A; border: 1px solid black;" type="submit" value="Submit">
     </form>
            </div>
        </div>
    </div>
  <?php
  }
  else{
    header('location:viewaccount.php');
  }
  ?>
 </div>













 ?>
</body>
</html>