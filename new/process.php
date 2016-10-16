
<?php
$con=mysqli_connect('localhost','root','','mydatabase');
 
if(mysqli_connect_errno($con))
{
		echo 'Failed to connect';
}
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

 
// create a variable
$name= $_POST['name'];
//echo $name;
$password= $_POST['password'];
//echo $password;
//$department=$_POST['department'];
$email=$_POST['email'];
//echo $email;
 
//Execute the query
 mysqli_query($con,"SELECT * from student1");

 $sql = "SELECT * FROM student1 WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "This username already exists!";// echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"].$row["password"]."<br>";
      $URL="http://localhost/new/index.php";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
    }
} else {
    mysqli_query($con,"INSERT INTO student1(name,email,password) 
	VALUES('$name','$email','$password')");
	$URL="http://localhost/new/file2.php";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
}

mysqli_close($con);
?>