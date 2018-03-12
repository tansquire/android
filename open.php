 <?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "android";
$data = $_POST["value"]; 
//$data = "100"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE heroes SET name=$data WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 
