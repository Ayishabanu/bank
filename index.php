<!DOCTYPE html>
<html>
<head>
	<title>Spark Bank</title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
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
<h1>Welcome to Spark Bank!</h1>
<div class="container">
        <div >
          <img src="data:image/png;base64,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"></img>
        </div>
        <br><br><br>
        <div class="button" >
          <a class="text" href="transfer.php">Transfer Money...</a>
        </div>
  </div>
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