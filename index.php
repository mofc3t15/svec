<html><head><title>SVEC - Files</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="w3-light-grey">

<ul class="w3-navbar w3-border w3-light-grey w3-center">
  <li style="width:33.33%"><a  class="w3-text-grey" href="htts://svec.ml">MAIL</a></li>
  <li style="width:33.33%"><a class="w3-blue-grey" href="#">FILES</a></li>
  <li style="width:33.33%"><a class="w3-text-grey" href="https://svec.ml/howto.html">HOW TO</a></li>
</ul>



<div class="w3-card-4" style="padding:10px" action="form.asp">
  <div class="w3-container w3-blue-grey">
    <h2>Files</h2>
  </div>
<br>  

<div class=" w3-text-blue-grey">



  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey">
        <th>Sender</th>
        <th>Description</th>
        <th>LINKS</th>
      </tr>
    </thead>

<?php


$servername = "mysql.hostinger.in";
$username = "u275757327_user";
$password = "gy2lysme!";
$dbname = "u275757327_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, description, attachment FROM files ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td> " . $row["description"]. "</td><td><a href='uploads/" . $row["attachment"]     . "'>DOWNLOAD</a></td></tr><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


  </table>


</div>



  </div>






 







</body></html>

