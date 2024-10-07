<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$conn = mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);

?>

<html>
<head>
</head>
<style>
 *{
    margin: 0px;
    padding: 0px;

}
body{
    font-size: 120%;
    background: #F8F8FF;
}


body{
            margin:0;
            background: #c0c0c0;
            width: 1345px;
           
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
            width: 190px;
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
        .mini-footer{
        background-color: #000033;
         color:white;
         height: 30px;
        }




.header{
    width: 37%;
    margin: 50px auto 0px;
    color: white;
    background: #f8f8ff;
    text-align: center;
    border: 1px solid #ff8c0f;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}
form{
    width: 70%;
    background-color: #f8f8ff;
    margin: 0px auto;
    padding: 30px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
    margin-bottom: 20px;
}


.wrapper{
    background-color: #fff8dc;
    width: 50%;
    padding: 12px;
    margin: 20px auto 0;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}


.input-group{
    margin: 10px 0px 10px 0px;

}

.input-group label{
    display: block;
    text-align: left;
    margin: 0px;
}
.input-group input{
    height: 30px;
    width: 80%;
    padding: 2px 4px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.input-box label{
     display: block;
    text-align: left;
    margin: 0px;
}
.input-box input{
     height: 30px;
    width: 80%;
    padding: 2px 4px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.input[type = "radio"]{
     height: 20px;
     width: 70%;
     margin-right: 10px;
     
}

.btn{
    padding: 14px;
    font-size: 15px;
    color: white; 
    background: #5F9EA0;
    border: none;
    border-radius: 11px;

}
</style>
<body>


<h1><h2><center><br><marquee>*****&nbsp;&nbsp; UNIQUE FOOD &nbsp;&nbsp;*****&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *****&nbsp;&nbsp; UNIQUE FOOD &nbsp;&nbsp;*****
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *****&nbsp;&nbsp; UNIQUE FOOD &nbsp;&nbsp;*****&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*****&nbsp;&nbsp; UNIQUE FOOD &nbsp;&nbsp;*****
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*****&nbsp;&nbsp; UNIQUE FOOD &nbsp;&nbsp;*****&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*****&nbsp;&nbsp;UNIQUE FOOD&nbsp;&nbsp;*****</marquee> </center><br></h2></h1>
                <h3><center> "FOOD IS NOT RATIONAL.<br>FOOD IS CULTURE,HABIT,<br>CRAVING AND IDENTIFY"</center></h3>
                <div class ="nav">
                    <ul>
              <li><a href="Main.php">   HOME  </a></li>
               
                <li> <a href="contactus.php"> CONTACT US </a> </li>
                <li> <a href="feedback.php"> FEEDBACK</a> </li>
                <li> <a href="Donation.php"> DONATION </a> </li>
                <li> <a href="index.php"> MENU </a></li>
                <li> <a href="About.php"> ABOUT </a> </li>
                 <li> <a href="Login.php"> ADMIN PAGE</a> </li>
           
            </ul>
                </div>  


<div class="wrapper">
<h1><center>Contact-US Form</center></h1>
<form action="" method="GET">


<div class="input-group">
     <label> Email </label>
     <input type="text" name="mail"  required>
</div>
<div class="input-group">
     <label> Full name    </label>
     <input type="text" name="fullname" value="" required>
</div>
<div class="input-group">
     <label> Phone No.  </label>
     <input type="text" name="phoneno"  required>
  </div>
<div class="input-group">
     <label> Question  </label>
     <input type="text" name="question"  required>
  </div>


<div class="input-group">
        <button type="submit" name="submit" value="Submit" class="btn"> Submit</button>
        </div> 

</form>
</div>
<?php
if($_GET['submit'])
{
	$mail = $_GET['mail'];
	$fn = $_GET['fullname'];
	$phno = $_GET['phoneno'];
	$que = $_GET['question'];
	

     if(  $mail !=="" && $fn !=="" && $phno !=="" && $que !=="" )
	{
          
          $query =  "INSERT INTO `contact`( `mail`, `fullname` , `phoneno`, `question`) VALUES ( '$mail','$fn','$phno','$que')";
           $data = mysqli_query($conn, $query);
     
		if($data)
		{
		echo "<script> alert('Your form successfully submitted!! Wait For Our Responce!!') </script>";
		echo "<script> alert('Please Wait For Admin's Reply') </script>";
       ?> <META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/project/Main.php"; >
       <?php  
		}
	}
	else
	{
	echo "All Fields Are Required";
	}
}
?>

<br>

<footer class="footer-area footer--light">
                    <div class="mini-footer">
                     <div class="container">
                       <div class="row">
                         <div class="col-md-12">
                           <div>
                             <p  class="copyright-text"><center><h3>© 2021  All rights reserved. ##Site Designed by @NAYAN  @KALYANI  @AKASH  @MONALI.  ##Site - Online Food Operating </h3>
                             </center>  
                             </p>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                       </footer>
</body>

</html>