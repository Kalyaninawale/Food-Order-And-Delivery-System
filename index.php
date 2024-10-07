<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "testing");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Webslesson Demo | Simple PHP Mysql Shopping Cart</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
		<style>
	  body{
            margin:0;
            background: #c0c0c0;
        }
       
        .nav{
            width: 100%;
            background: #000033;
            height: 100px;
        }
        ul{
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute; 
        }
        ul li {
            float: left;
            margin-top: 30px;

        }
        ul li a{
            width: 160px;
            color:white;
            display: block;
            text-decoration: none;
            font-size: 20px;
            text-align: center;
            padding: 10px;
            border-radius: 20px;
            font-family:century 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: bold;
        }
        a:hover{
            background: #669900;

        }
        ul li ul{
            background: #000033;
        }
        ul li ul li{
            float: none;
        }
        ul li ul{
            display: none;
        }
        ul li:hover ul{
            display: block;
        }
        h2{
            background: #000033; 
            height: 80px;
            color:white;
            margin-top: 50px;
            width:inherit;
            text-align: center;
            text-decoration-line: none;
        }
        
        * {box-sizing: border-box;}
		
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.form{
	background-color: #f5f5f5;
}
/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 200px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  overflow-y: scroll;
  background-color: #f5f5f5;
}

/* Add styles to the form container */
.form-container {
  width: 500px;
  height: 400px;
  padding: 10px;
  
}

.btn{
	background: #7ed321;
	color: #fff;
	padding: 10px;
	border-radius: 4px;
	font-size: 10px;
	transition: all 0.35s ease;
}

	</style>
	<body>
		<br />
		<div class="container">
			<br />
			
            <h2><center><br><marquee>*****&nbsp;&nbsp; UNIQUE FOOD &nbsp;&nbsp;*****&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *****&nbsp;&nbsp; UNIQUE FOOD &nbsp;&nbsp;*****
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *****&nbsp;&nbsp; UNIQUE FOOD &nbsp;&nbsp;*****&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*****&nbsp;&nbsp; UNIQUE FOOD &nbsp;&nbsp;*****
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*****&nbsp;&nbsp; UNIQUE FOOD &nbsp;&nbsp;*****&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*****&nbsp;&nbsp;UNIQUE FOOD&nbsp;&nbsp;*****</marquee> </center><br></h2>
        <h3><center> "FOOD IS NOT RATIONAL.<br>FOOD IS CULTURE,HABIT,<br>CRAVING AND IDENTIFY"</center></h3>
        <div class ="nav">
           <ul>
              <li><a href="index.php">   HOME  </a></li>
               
                <li> <a href="contactus.php"> CONTACT US </a> </li>
                <li> <a href="feedback.php"> FEEDBACK</a> </li>
                <li> <a href="Donation.php"> DONATION </a> </li>
                <li> <a href="index.php"> MENU </a></li>
                <li> <a href="About.php"> ABOUT </a> </li>
                 <li> <a href="Login.php"> ADMIN PAGE</a> </li>
           
            </ul>
        </div><br />
			<br />
			<br />
			<br /><br />
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
						<th width="5%">Payment</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td colspan="2" align="center"> <button class="open-button" onclick="openForm()">Order Now</button></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />

   
<div class="form-popup" id="myForm">
<?php include('pay.php');   ?>
  <form action="" class="form-container" method="GET">
 <center>   <h1>Order Details</h1>
	<div class="input-group">
	<label for="fullname"><b> Full name </b></label>&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" placeholder="fullname" name="fullname" required>
	 </div><br>
	 <div class="input-group">
    <label for="address"><b> Address </b></label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="address" name="address" required>
	</div><br>
	<div class="input-group">
    <label for="city"><b>City</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="city" placeholder="city" name="city" required>
	</div><br>
	<div class="input-group">
	<label for="pincode"><b>Pincode</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="pincode" placeholder="pincode" name="pincode" required>
	</div><br>
	<div class="input-group">
	<label for="mobileno"><b>Mobile No.</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="mobileno" placeholder="mobileno" name="mobileno" required>
	</div><br>
	<div class="input-group">
	<label for="mailid"><b>Mail Id</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="mailid" placeholder="mailid" name="mailid" required>
	</div><br>
<div class="input-group">
     <label>Name    </label>&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" name="name" value="" required>
</div><br>
<div class="input-group">
     <label> Nick Name </label>&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" name="nickname"  required>
</div><br>
<div class="input-group">
     <label> Email </label>&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" name="mail"  required>
</div><br>

<div class="input-group">
     <label> Date Of Birth  </label>&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="date" name="dob"  required>
  </div><br>
<div class="input-grop"required>
             <label> Gender - </label>  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">&nbsp;&nbsp; Female 
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male" > &nbsp;Male
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> &nbsp; Other <br><br>
        </div>

<br>
  <div class="input-grop"required>
 <label> Card Detail - </label>&nbsp;&nbsp;&nbsp;  <input type="radio" name="detail" <?php if (isset($detail) && $gender=="credit card") echo "checked";?> value="Credit Card"> &nbsp;Credit Card <input type="radio" name="detail" <?php if (isset($detail) && $detail=="paypal") echo "checked";?> value="paypal" >&nbsp; Paypal
        </div>
		<br>
<div class="input-group">
     <label> Card No  </label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type= "text" name="cardno" required minlength="8" maxlength="24">
</div><br>
<div class="input-group">
     <label> Card CVV  </label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type= "text" name="cardcvv" required minlength="3" maxlength="3">
</div><br>

<div class="input-box">
<label> Expairy Date </label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="month" id="start" name="expairy" class="month-date" value=""  required>
</div><br>
<div class="input-group">
<label> Items  </label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type= "text" name="items" value="<?php echo $values["item_name"]; ?>" required >
</div><br>
<br>
<div class="input-box">
<label> Amount </label>&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="texth"  name="amount"  value="$ <?php echo number_format($total, 2); ?>"  required>
 </div><br>
   
<div class="input-group">
        <button type="submit" name="submit" value="Pay Now" class="btn"> Pay Now</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn cancel" onclick="closeForm()">Close</button></center>
        </div> 
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>