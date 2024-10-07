<?php

include("connection.php");

?>
<html>
<head> </head>
<body>
<form action="" class="form-container" method="GET">
 <center>   <h1>Menu Details</h1>
	<div class="input-group">
	<label for="id"><b> ID </b></label>&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" placeholder="id" name="id" required>
	 </div><br>
	 <div class="input-group">
    <label for="name"><b> Name </b></label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="name" name="name" required>
	</div><br>
	<div class="input-group">
    <label for="image"><b>Image</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="image" name="image" required>
	</div><br>
	<div class="input-group">
	<label for="price"><b>Price</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="price" name="price" required>
	</div><br>
	<br><br>
   
<div class="input-group">
        <button type="submit" name="submit" value="Pay Now" class="btn"> Add Menu</button>
        </div> <br>
  </form>
</div>
</body>
</html>
<?php
if($_GET['submit'])
{
	$id = $_GET['id'];
    $name = $_GET['name'];
    $image = $_GET['image'];
    $price = $_GET['price'];
    
     if($id !=="" && $name !=="" && $image !=="" && $price !=="" )
	{
          
          $query =  "INSERT INTO `tbl_product`(`id`, `name`, `image`, `price`) VALUES ('$id','$name','$image','$price')";
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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$conn = mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);
$query = "SELECT * FROM tbl_product";		
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total !=0)
{
?>		
	
	<table border=1 bordercolor="black" width=100% height=10% cellspacing=4cellpadding=30 bgcolor="lightyellow" align="center">
		<tr>
			<th>ID</th>
			<th> Name </th>
			<th>Images</th>
			<th>Price </th>
		</tr>
	

	
	
	
	<?php	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['id']." </td>
				<td>".$result['name']." </td>
				<td>".$result['image']."</td>
				<td>".$result['price']." </td>
				
				

			</tr>";

	}
}
else
{
	echo  "No Record Found...";
}


 ?>
 </table>
 <script>
 function checkdelete()
 {
	return confirm('Are you sure you want to delete this data ????');
 }
 </script>