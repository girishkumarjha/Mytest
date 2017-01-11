 <?

$name=$_POST["name"];$mob=$_POST["mob"];$sloc=$_POST["sloc"];$eloc=$_POST["eloc"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "krishna";
	// Create connection
	$conn = new mysqli($servername, $username, $password ,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE booking (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
mobile VARCHAR(30) NOT NULL,
start VARCHAR(50),
end VARCHAR(50),
reg_date TIMESTAMP
)";

	$sql2 = "INSERT INTO booking (name,mobile,start,end)
	VALUES ('$name', '$mob', '$sloc' , '$eloc')";

	

if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "not inserted <br>" . $conn->error;
}


 ?>
