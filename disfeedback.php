
<html>
<head> 
<title>DASHBOARD</title>
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" >
</head>
<style>

:root{
    --main-color: #50394c;
    --color-dark: #1D2231;
    --text-grey: #8390A2;
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
}

.sidebar {
    width: 245px;
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    background: var(--main-color);
    z-index: 100;
}
.slidebar-brand{
    height: 90px;
    padding: 1rem 0rem  1rem  1rem;
    color: #fff;

}
.sidebar-brand span{
    display: inline-block;
    padding-right: 1rem;
}
.sidebar-menu {
    margin-top: 1rem;
}
.sidebar-menu li {
        width: 90%;
        margin-bottom: 2rem;
        padding-left: 1rem;
}

.sidebar-menu a {
            padding-left: 1rem;
            display: block;
            color: #fff;
            font-size: 1.1rem;
}
.sidebar-menu a.active {
            background: #fff;
            padding-top: 1rem ;
            padding-bottom: 1rem;
            color: var(--main-color);
            border-radius: 30px 0px 0px 30px;
}
.slidebar-menu a span:first-child{
            font-size: 1.5rem;
            padding-right: 1rem;
}
.main-content{
    margin-left: 245px;

}
header {
    display: flex;
    background-color:#d6cbd3;
    justify-content: space-between;
    padding: 1rem 2rem;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
    position: fixed;
    left: 245px;
    width: calc(100% - 245px);
    top: 0;
    z-index:  100;
}
header h2 {
    color: #222;
}
header label{
    font-size: 1.7rem;
    padding-right: 1rem;
}

.search-wrapper input {
    border: 1px solid #ccc;
    border-radius: 30px;
    height: 50px;
    display: flex;
    align-items: center;
    overflow-x: hidden;
}

.search-wrapper span{
    display: inline-block;
    padding: 0rem 1rem;
    font-size: 1.5rem;
}

.search-wrapper input{
        height: 100%;
        border: none;
        padding: 0rem;
        outline: none;
}
.user-wrapper{
    display: inline-flex;
    align-items: center;
}
.user-wrapper img{
    border-radius: 100%;
    margin-right: 0rem;
}

.user-wrapper small {
    display: inline-block;
    color: var(--text-grey);
}
td{
	padding:15px;
}
table,th,td,{
    border:2px solid black;
    border-collapse: collapse;
    }



 </style>
<body>  
     
    
    <div class="sidebar"> 
        <div class="sidebar-brand">
            <h2>  <span class="las la-bars"></span></h2>
        </div> 
        
        <div class="sidebar-menu">
            <ul>
                <li><a href="Dashboard.php" class="active"><span class="la la-align-justify"></span>
                    <span> DASHBOARD</span></a>
                </li>

                <li><a href="dondash.php"><span class="la la-gift"></span>
                    <span>DONATION</span></a>
                </li>

                <li><a href="https://docs.google.com/forms/d/1nYbkoIAFQbci829ZeMuj2yyEHyv05SFhZfJpW5dwr9k/edit"><span class="las la-images"></span>
                    <span> FEEDBACK</span></a>
                </li>

                <li><a href="paydash.php"><span class=" la la-money"></span>
                    <span> PAYMENT </span></a>
                </li>

                <li><a href="Donation.php"><span class="la la-list"></span>
                    <span> DONATION LIST </span></a>
                </li>

                <li><a href="index.php"><span class="la la-file-text"></span>
                    <span> MENUS</span></a>
                </li>

                <li><a href="discontactus.php"><span class="las la-clipboard-list"></span>
                    <span> CONTACT </span></a>
                </li>
            </ul>
        </div> 
    </div>

    <div class="main-content">
        <header>
               
         

           <div class="user-wrapper">
            <span class=""> </span>
                 <div>
                 <h1> <img src="https://scontent.fbom19-2.fna.fbcdn.net/v/t1.6435-9/177572261_105760458323793_2063382909927757254_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=AUP33dX5_sQAX_ssm9q&_nc_ht=scontent.fbom19-2.fna&oh=d151db2d1c5c4c5d5d6f6c6fd0aed406&oe=60DA35CA" alt="logo" width="50px">Unique Foods</h1>
                   
                </div>
                
            </div>
        </header>
        <main><br><br><br><br><br><br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$conn = mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);
$query = "SELECT * FROM feedback";		
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total !=0)
{
?>		
	<center><h1> FEEDBACK RESPONCE </h1></center><br>
	<table border=1 bordercolor="black" width=100% height=10% cellspacing=4cellpadding=30 bgcolor="lightyellow" align="center">
	<tr>
			<th> Mailid </th>
			<th>First Name</th>
			<th>Last Name</th>
			<th> Valuable Feedback</th>
			<th> Feedback</th>
			

		</tr>
	

	
	
	
	<?php	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
		<td>".$result['mail']." </td>
		<td>".$result['firstname']." </td>
		<td>".$result['lastname']." </td>
		<td>".$result['valuablefeed']." </td>
		<td>".$result['feed']." </td>
		
		
		

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