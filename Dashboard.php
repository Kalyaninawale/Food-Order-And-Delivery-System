<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
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
    width: 345px;
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    background: var(--main-color);
    z-index: 100;
}
.slidebar-brand{
    height: 90px;
    padding: 1rem 0rem  1rem  2rem;
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
        width: 100%;
        margin-bottom: 1.5rem;
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
    margin-left: 345px;

}
header {
    display: flex;
    justify-content: space-between;
    background-color:#d6cbd3;
    padding: 1rem 1.5rem;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
    position: fixed;
    left: 345px;
    width: calc(100% - 345px);
    top: 0;
    z-index:  100;
}
header h2 {
    color: #222;
}
header label{
    font-size: 1.5rem;
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
    padding:6rem 1rem;
    font-size: 1.5rem;
}

.search-wrapper input{
        height: 100%;
        border: none;
        padding: 1.5rem;
        outline: none;
}
.user-wrapper{
    display: inline-flex;
    align-items: center;
}
.user-wrapper img{
    border-radius: 50%;
    margin-right: 1rem;
}

.user-wrapper small {
    display: inline-block;
    color: var(--text-grey);
}
main {
    margin-top: 85px;
    padding: 2rem 1.5rem;
    background: #f1f5f9;
    min-height: calc(100vh - 90px);
}

.cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 2rem;
    margin-top: 1rem;
}

.card-single {
    display: flex;
    justify-content: space-between;
    background: #ffb6c1;
    padding: 2rem;
    border-radius: 2px;
}

.card-single div: last-child span{
    font-size: 3rem;
    color: var(--main-color);
}


.card-single div: first-child span{
    color: var(--text-grey);
}

.card-single: last-child{
    background: var(--main-color);
}

.card-single: last-child h1,
.card-single : last-child div: first-child span
.card-single : last-child div: last-child span{
    color : #fff ;
}


 </style>
<body>  
     
    <div class="form-wrapper"> 
    <center><h3>Welcome: <?php echo $row['name']; ?> </h3></center>
	 <div class="reminder">
    <p><a href="logout.php">Log out</a></p>
  </div>
</div>
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

                <li><a href="disfeedback.php"><span class="las la-images"></span>
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
               <h2>
                <label for="">
                <img src="https://scontent.fbom19-2.fna.fbcdn.net/v/t1.6435-9/177572261_105760458323793_2063382909927757254_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=AUP33dX5_sQAX_ssm9q&_nc_ht=scontent.fbom19-2.fna&oh=d151db2d1c5c4c5d5d6f6c6fd0aed406&oe=60DA35CA" alt="logo" width="50px">
                </label>
               UNIQUE FOODS
               </h2>
         
<div class="form-wrapper"> 
    <center><h3>Welcome:<?php echo $row['name']; ?> </h3></center>
	 <div class="reminder">
    <p><a href="logout.php">Log out</a></p>
  </div>
 
           <div class="user-wrapper">
            
                 <div>
                <a href="index.php"> <img src=" <?php echo $row['img']; ?>"  width="70px"></a>
                   
                </div>
                <i class=""></i>
            </div>
        </header>
        <main>
 <br><br>
            <div class="cards">
              <div class="card-single">
                    <div>
                    <a href="product.php">   <h1> Menus </h1></a><br>
                        <span> List Of Menu's </span>
                    </div>
                    <span class="la la-file-text"> </span>
                </div>

                <div class="card-single">
                    <div>
                     <a href="About.php">   <h1>About</h1></a><br>
                        <span>Visit to About Page</span>
                    </div>
                    <span class="las la-images">  </span>
                </div>

                <div class="card-single">
                    <div>
                       <a href="TSCP.php"> <h1>Conditions</h1></a><br>
                        <span>Terms&Conditions,Privacy Policy,Shopping Policy</span>
                    </div>
                    <span class="las la-boxes">  </span>
                </div>

                <div class="card-single">
                    <div>
                      <a href="structure.php">  <h1>Structures</h1></a><br>
                        <span>Order/Doation/Menu's Structure</span>
                    </div>
                    <span class="las la-wallet">  </span>
                </div>

                <div class="card-single">
                    <div>
                      <a href="contact.php">  <h1>Contact Detail</h1>  </a><br>
                        <span>From where customes can contact with Us</span>
                    </div>
                    <span class="las la-wallet">  </span>
                </div>

                <div class="card-single">
                    <div>
                       <a href="aim.php"> <h1>Aim</h1></a><br>
                        <span>Target , Mission , Goal</span>
                    </div>
                    <span class="las la-wallet">  </span>
                </div>


            </div>
        </main>
    </div>
</body>
</html>