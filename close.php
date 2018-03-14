 <?php
$servername = "10.21.160.201";
$username = "root";
$password = "gowsalya";
$dbname = "scada";
$data = $_POST["value1"]; 
//$data = "100"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE command SET value=$data WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 
