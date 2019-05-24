<?php
$servername = "127.0.0.1";
$username = "jeffrey";
$password ="password";
$dbname = "testTable";

//create link
$conn = new mysqli($servername, $username, $password, $dbname);

//check link
if ($conn->connect_error){
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM testTable";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Name: " . $row["name"]. " - Age: " . $row["age"]. "<br>";
    }
}else{
    echo " o result";
}
$conn->close();
?>
