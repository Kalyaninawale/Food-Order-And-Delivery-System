<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$conn = mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);

?>


<?php
if($_GET['submit'])
{
	$fn = $_GET['fullname'];
    $add = $_GET['address'];
    $cty = $_GET['city'];
    $pin = $_GET['pincode'];
    $mbno = $_GET['mobileno'];		
    $id = $_GET['mailid'];
    $name = $_GET['name'];
	$nn = $_GET['nickname'];
	$mail = $_GET['mail'];
	$dob = $_GET['dob'];
	$gdr = $_GET['gender'];
	$dtl = $_GET['detail'];
	$cdno = $_GET['cardno'];
	$cdcv = $_GET['cardcvv'];
	$expy = $_GET['expairy'];
    $itm = $_GET['items'];
	$amt = $_GET['amount'];

     if($fn !=="" && $add !=="" && $cty !=="" && $pin !=="" && $mbno !=="" && $id !==""  && $name !=="" && $nn !=="" && $mail !=="" && $dob !=="" && $gdr !=="" && $dtl !=="" &&  $cdno !=="" && $cdcv !=="" && $expy !=="" && $amt !=="")
	{
          
          $query =  "INSERT INTO `order`(`fullname`, `address`, `city`, `pincode`, `mobileno`, `mailid`, `name`, `nickname`, `mail`, `dob`, `gender`, `detail`, `cardno`, `cardcvv`, `expairy`, `items`, `amount`)
           VALUES ('$fn','$add','$cty','$pin','$mbno','$id','$name','$nn','$mail','$dob','$gdr','$dtl','$cdno','$cdcv','$expy','$itm','$amt')";
           $data = mysqli_query($conn, $query);
     
		if($data)
		{
			echo "<script> alert('Payment Successfully Completed !!!Order Deone!!!') </script>";
            ?>
            <?php  
		}
	}
	else
	{
	echo "All Fields Are Required";
	}
}
?>