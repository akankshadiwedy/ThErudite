

<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email= $_POST['email'];
//echo $email;
$password= $_POST['password'];
//echo $password;
//$temp=1;
$sql = "SELECT * FROM student1 WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"].$row["password"]."<br>";
        //header("Location : http://localhost/new/file2.php");
        
$URL="http://localhost/new/file2.php";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";


       // exit();
    }
} else {
   // echo "0 results";
	//header("Location : http://localhost/new/login.php");
	echo "Wrong email and password";
	$URL="http://localhost/new/login.php";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
	//exit();
}
$conn->close();
?>



