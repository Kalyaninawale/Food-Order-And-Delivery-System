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
$query = "SELECT * FROM donation";		
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total !=0)
{
?>		
	
	<table>
		<tr>
			<th>Full Name</th>
            <th>Address</th>
            <th>Mobile No.</th>
            <th>Doner Name</th>
            <th>Reason Of Donation</th>
			<th>Nick Name </th>
			<th>Email</th>
			<th>Date Of Birth </th>
			<th>Gender </th>
			<th> Detail </th>
			<th> Cardno </th>
			<th> Cardcvv </th>
			<th>Expairy </th>
            <th>Amount </th>
			<th >Operation</th>

		</tr>
	

	
	
	
	<?php	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['fullname']." </td>
                <td>".$result['address']." </td>
                <td>".$result['mobileno']." </td>
                <td>".$result['donername']." </td>
				<td>".$result['reason']." </td>
                <td>".$result['nickname']." </td>
				<td>".$result['mail']."</td>
				<td>".$result['dob']." </td>
				<td>".$result['gender']." </td>
				<td>".$result['detail']."</td>
				<td>".$result['cardno']." </td>
				<td>".$result['cardcvv']."</td>
				<td>".$result['expairy']."</td>
                <td>".$result['amount']."</td>
				
				<td><a href='donationdelete.php?fn=$result[fullname]&nn=$result[nickname]&mail=$result[mail]' onclick= 'return checkdelete()'>Delete</a></td>

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