<!Doctype html>
<html>
<head>
	<title>Transfer History</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="topnav">
    <a class="active" href="index.php"><img class="image" src="https://cdn.worldvectorlogo.com/logos/spark-1.svg"></img></a>
  <div class="topnav-right">
    <a class="active" href="index.php">Home</a>
    <a class="active" href="viewusers.php">View Users</a>
  <a class="active" href="transferdetails.php">Transfer History</a>
  </div>
</div>
</div>  
 
  
<table class="viewusers">
	<h1>Transfer History</h1>
	<tr>
		<th>Sender</th>
		<th>Reciever</th>
		<th>Credit</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost","id16072623_ayishabankwebsite","k!zpRp/FM96}41mb","id16072623_user");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT * FROM transfer_history";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["from_user"] ."</td><td>".  $row["to_user"] ."</td><td>" .  $row["Credit"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
</table>
 <div class="middle">
     <h6>by AyishaAfzal</h6>
     <a class="btn" href=" https://www.youtube.com/channel/UCT3r1_5h7QRxQL0lOXwQybA">
        <i class="fab fa-youtube"></i>
     </a>
     <a class="btn" href=" https://www.instagram.com/invites/contact/?i=1wkfmuvnib062&utm_content=kj5rf96">
        <i class="fab fa-instagram"></i>
     </a>
     <a class="btn" href="https://github.com/Ayishabanu">
        <i class="fab fa-github"></i>
     </a>
     <a class="btn" href="https://www.linkedin.com/in/ayishabanu-syedibrahim-72145218b/">
       <i class="fab fa-linkedin"></i>
     </a>
  </div>
  
</body>
</html>