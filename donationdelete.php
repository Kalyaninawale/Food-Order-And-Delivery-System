<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proj";
$conn = mysqli_connect($servername,$username,$password,$dbname);


$fullname = $_GET['fn'];

$query = "DELETE FROM donation WHERE fullname = '$fullname'";
$data = mysqli_query($conn,$query);
if($data)
{
	echo "<script> alert('Record Deleted') </script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/project/dondash.php"; >
	<?php 
	}
else
{
	echo "Record Not Deleted From Table";
}
?>