<!DOCTYPE html>
<html>
<head>
	<title>何敏煌的練習網頁</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<style>
		body {
			  font-family: 微軟正黑體;
		}
	</style>
</head>
<body>
	<div class="container">
<?php include("header.php"); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *  FROM news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table class='table table-striped'>";
  echo "<tr><td>消息</td><td>張貼時間</td></tr>";
  while($row = $result->fetch_assoc()) {
  	echo "<tr>";
	    echo "<td>" . $row["title"]. "</td>";
	    echo "<td>" . $row["created"]. "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</div>
<?php include("footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>