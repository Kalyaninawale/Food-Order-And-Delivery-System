
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proj";

$conn = mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);
 
$_GET['fn'];		
$_GET['nn'];
$_GET['mail'];
$_GET['dob'];
$_GET['gdr'];
$_GET['dtl'];
$_GET['cdno'];
$_GET['cdcv'];
$_GET['expy'];
$_GET['amt'];
?>
<html>
<head>
</head>
<body>
<form action="" method="GET">
Full Name - <input type="text" name="fullname" value="<?php echo $_GET['fullname']; ?>"/> <br> <br>
Nick Name - <input type="text" name="nickname" value="<?php echo $_GET['nickname']; ?>"/> <br> <br>
Email - <input type="text" name="mail" value="<?php echo $_GET['mail']; ?>"/> <br> <br>
Date Of Birth - <input type="text" name="dob" value="<?php echo $_GET['dob']; ?>"/> <br> <br>
Gender - <input type="text" name="gender" value="<?php echo $_GET['gender']; ?>"/> <br> <br>
Detail - <input type="text" name="detail" value="<?php echo $_GET['detail']; ?>"/> <br> <br>
Card No - <input type="text" name="cardno" value="<?php echo $_GET['cardno']; ?>"/> <br> <br>
Card CVV - <input type="text" name="cardcvv" value="<?php echo $_GET['cardcvv']; ?>"/> <br> <br>
Expairy  - <input type="text" name="expairy" value="<?php echo $_GET['expairy']; ?>"/> <br> <br>
Amount - <input type="text" name="amount" value="<?php echo $_GET['amount']; ?>"/> <br> <br>


<input type="submit" name="submit" value="Update"/>
</form>
<?php
if($_GET['submit'])
{
	
	$fn = $_GET['fullname'];		
	$nn = $_GET['nickname'];
	$mail = $_GET['mail'];
	$dob = $_GET['dob'];
	$gdr = $_GET['gender'];
	$dtl = $_GET['detail'];
	$cdno = $_GET['cardno'];
	$cdcv = $_GET['cardcvv'];
	$expy = $_GET['expairy'];
	$amt = $_GET['amount'];
	
	
	$query = "UPDATE payment SET  nickname ='$nn', mail ='$mail', DOB ='$dob', Gender ='$gdr' , Detail ='$dtl', cardno ='$cdno', cardcvv ='$cdcv', expairy ='$expy' WHERE FULLNAME ='$fn'";
	
	$data = mysqli_query($conn,$query);
	if($data)
	{
		echo "Record Updated Successfully!!. <a href='paydisplay.php'>Check Record Here</a>";
	}
	else{
		echo "Record Not Updated!!";
	}
}
else
{
  echo "button not pressed";
}
?>
</body>
</html>