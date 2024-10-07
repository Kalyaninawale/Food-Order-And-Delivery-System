


 <html>
<style>
td{
	padding:15px;
}
</style>
<?php
include("connection.php");

$conn = mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);
$query = "SELECT * FROM order";		
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total !=0)
{
?>		
	
	<table>
	<tr>
			<th>Full Name</th>
			<th> Address </th>
			<th> City </th>
			<th> Pincode </th>
			<th> MobileNo. </th>
			<th> Mailid </th>
			<th> Name </th>
			<th>Nick Name </th>
			<th>Mail</th>
			<th>Date Of Birth </th>
			<th>Gender </th>
			<th> Detail </th>
			<th> Cardno </th>
			<th> CardCVV </th>
			<th>expairy </th>
			<th> Items </th>
            <th>amount </th>

		</tr>
	

	
	
	
	<?php	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
		<td>".$result['fullname']." </td>
		<td>".$result['address']." </td>
		<td>".$result['city']." </td>
		<td>".$result['pincode']." </td>
		<td>".$result['mobileno']." </td>
		<td>".$result['mailid']." </td>
		<td>".$result['name']." </td>
		<td>".$result['nickname']." </td>
		<td>".$result['mail']."</td>
		<td>".$result['dob']." </td>
		<td>".$result['gender']." </td>
		<td>".$result['detail']."</td>
		<td>".$result['cardno']." </td>
		<td>".$result['cardcvv']."</td>
		<td>".$result['expairy']."</td>
		<td>".$result['items']." </td>
		<td>".$result['amount']."</td>
		
		

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
 </html>