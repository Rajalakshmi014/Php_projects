<!DOCTYPE html>
<html>
<head>
  <title>Table with database</title>
  <style type = "text/css">
  table{
    width: 15%;
    color: #d96459;
    font - family: Arial;
    font - size: 25px;
    text - align: right;
  }
  th{
    background-color: #588c7e;
    color: white;
  }
  </style>
</head>
<body>
  <table >
    <tr>
      <th>id</th>
      <th>username</th>
</tr>
<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$conn = mysqli_connect("localhost","root","","third_project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql = "SELECT id, username from users";
  $result = $conn-> query($sql);

  if($result-> num_rows > 0) {
    while($row = $result-> fetch_assoc()) {
      echo "<tr><td>". $row["id"]."</td><td>". $row["username"]."</td><td>" . "</td><tr>";
    
    }
    echo "</table>";
  }
  else{
    echo "0 result";
  }
$conn-> close();
?>
</body>
</html>

