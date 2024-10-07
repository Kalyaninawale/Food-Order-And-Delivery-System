<html>
<style>
td{
	padding:15px;
}
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proj";

$conn = mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);
$query = "SELECT * FROM donation";		
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total !=0)
{
?>		
	

    <div class="cards">
                <div class="card-single">
                    <div>
                        <span><h1> Full Name  </h1>
                    </span>
                    </div>
                </div>
</div>