<?php
?><!DOCTYPE html>
<html>
    <head>
        <title>
                        Navigation Bar
                </title>
                
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


        .h3{
               color: white;
        }

        .mini-footer{
        background-color: #000033;
         color:white;
         height: 30px;
        }

      



/* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fff;
			color: #fff;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
        }

 
/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}


      
.close:hover,
.close:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 1px 16px;
  background-color: #000033;
  color: #fff;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 1px 16px;
  background-color: #000033;
  color: #fff;
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: #fff;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #000033;
  color: #fff;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding:1px 16px;
  background-color: #000033;
  color: #fff;
}
.img{
 background-color: #fff;
}	  



button{
	width: 20%;
	align: center;
	background: transparent;
	border: none;
	background: #fff;
	color: #000033;
	padding: 15px;
	border-radius: 4px;
	font-size: 16px;
	transition: all 0.35s ease;
}
.head{
            width: 100%;
            background: #000033;
            height: 80px;
			padding: 3px;
			color:#fff;
        }
.h3{
            width: 100%;
            background: #2F4F4F;
            height: 60px;
			padding: 2px;
			color:#fff;
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
              <li><a href="index.php">   HOME  </a></li>
               
                <li> <a href="contactus.php"> CONTACT US </a> </li>
                <li> <a href="feedback.php"> FEEDBACK</a> </li>
                <li> <a href="Donation.php"> DONATION </a> </li>
                <li> <a href="index.php"> MENU </a></li>
                <li> <a href="About.php"> ABOUT </a> </li>
                 <li> <a href="Login.php"> ADMIN PAGE</a> </li>
           
            </ul>
                </div>  
            <h1 > <center> <b>ABOUT<b></center></h1>
            <center> <h3> <blockquote> <blockquote>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; With The help of our website you can order Food online very easily.
                    Our Website is helpful for smart work.Without Wasting Your time. We Provide your order very safely. And it's really useful 
                    for save your important time. And also if You wan to cancel your order then we ask about your order then you can also cancel your order. 
                    And If you wan to donate Food/Money to some Old-Peoples or Small Childrens Then you can donate using our website.
                     We provide your donation To Old-Age Homes OR Orphanage.So, Our website is very useful For Time Saving And For help to Childrens OR Old agers.
                    <br> 
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For Order First go to Menu Page FOr See Menus. After that 
                     select Menu If you wan to order after that Pay your bill. If you wan to do "Cash On Deliver" Then you can also select COD option. 
                     And If You wan to Donate Moneys/Food to some childrens OR Old Agers then you may go to Donation Page Then You can see All Orphanage
                      OR Old-Age Homes who need for Donation Then you can select Orphanage/Old-Age Home then you can select What you want to donate
                       Moneys OR Food Then You can Donate, Using Our Donation Page, Then You wan to fill Feedback form If You wan to contact With us 
                       then It is Available On Our Home Page </blockquote></blockquote> </h3></center>


 <div class="head"><h1><center>About Us<br></center></h1></div>
 <br> <h3> <center>We are the student of Government Polytechnic Awasari. Our Branche is Information Technology. In Third Year.We are develop this project 
 under the Guidence of Our Teacher Mrs. J.G.Dabhade.And also under the guidence of Our HOD(Head Of Department) Dr. D.N. Rewadkar.</center></h3>
 <h3 style="color:red"><center>Team Member's<br></center></h3><br>
    <!-- Trigger/Open The Modal -->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button id="_my_Btn"><b>Nayan Mahesh Naykar<b></button>&nbsp;&nbsp;
	  <!-- The Modal -->
   <div id="myModal_modal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">x</span>
             <b><div class="modal-header"><h3><b><b><center> NAYAN  MAHESH  NAYKAR </center> <b><b></h3></div> <center> 
			<div class="modal-body"><img src = "Nayan.jpeg" weidth="350px" height="350px"></center><br>
			<div class="modal-footer"><h3><b>Enroll No - 1810510249<b></h3>
	  <h3><b>Mail ID- naykarnayan7@gmail.com<b></h3>
	  <h3><b>Study In Informaion Technology in Government Polytechnic Awasari<b></h3></div>
        </div>

    </div>
	  <button class="myBtn_multi"><b>Kalyani Deepak Nawale<b></button>&nbsp;&nbsp;
   <!-- The Modal -->
    <div  class="modal modal_multi">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <b><div class="modal-header"><h3><b><b><center> KALYANI  DEEPAK  NAWALE</center> <b><b></h3></div> <center> 
			<div class="modal-body"><img src = "Kalyani.jpeg" weidth="370px" height="380px"></center><br>
			<div class="modal-footer"><h3><b>Enroll No - 1810510266<b></h3>
	  <h3><b>Mail ID- kalyaninawale078@gmail.com<b></h3>
	  <h3><b>Study In Informaion Technology in Government Polytechnic Awasari<b></h3></div>
        </div>

    </div>



   
 
 

    </div>
    <button class="myBtn_multi"><b>Akash Bhalchandra Nikam<b></button>&nbsp;&nbsp;
	 <!-- The Modal -->
    <div class="modal modal_multi">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <b><div class="modal-header"><h3><b><b><center> AKASH  BHALCHANDRA  NIKAM</center> <b><b></h3></div> <center> 
			<div class="modal-body"><img src = "Akash.jpeg" weidth="350px" height="350px"></center><br>
			<div class="modal-footer"><h3><b>Enroll No - 1810510276<b></h3>
	  <h3><b>Mail ID- akashnikam803@gmail.com<b></h3>
	  <h3><b>Study In Informaion Technology in Government Polytechnic Awasari<b></h3></div>
      </div>  </div>

    </div>


    <button class="myBtn_multi"><b>Monali  Ananda  Mankar<b></button>&nbsp;&nbsp;
   <!-- The Modal -->
    <div  class="modal modal_multi">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <div class="modal-header"><h3><b><b><center> MONALI ANANDA MANKAR</center> <b> <b></h3></div> <center> 
			<div class="modal-body"><img src = "monali.jpeg" weidth="350px" height="350px"></center><br>
			<div class="modal-footer"><h3><b>Enroll No - 1810510278<b></h3>
	  <h3><b>Mail ID- manakarmonali422@gmail.com<b></h3>
	  <h3><b>Study In Informaion Technology in Government Polytechnic Awasari<b></h3></div>
        </div>

    </div>
	</div>
 <h3 style="color:red"><center><b>Under The Guidence Of</b><br></center></h3><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <button><b>Mrs. J.G.Dabhade  (GUIDE)<b></button>&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <button><b>Dr. D.N. Rewadkar  (HOD)<b></button>&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <button><b>DR.D.R.Nandanwar(PRINCIPAL)<b></button>&nbsp;&nbsp;
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
        </head>
		<script>
        // Get the modal

        var modalparent = document.getElementsByClassName("modal_multi");

        // Get the button that opens the modal

        var modal_btn_multi = document.getElementsByClassName("myBtn_multi");

        // Get the <span> element that closes the modal
        var span_close_multi = document.getElementsByClassName("close_multi");

        // When the user clicks the button, open the modal
        function setDataIndex() {

            for (i = 0; i < modal_btn_multi.length; i++)
            {
                modal_btn_multi[i].setAttribute('data-index', i);
                modalparent[i].setAttribute('data-index', i);
                span_close_multi[i].setAttribute('data-index', i);
            }
        }



        for (i = 0; i < modal_btn_multi.length; i++)
        {
            modal_btn_multi[i].onclick = function() {
                var ElementIndex = this.getAttribute('data-index');
                modalparent[ElementIndex].style.display = "block";
            };

            // When the user clicks on <span> (x), close the modal
            span_close_multi[i].onclick = function() {
                var ElementIndex = this.getAttribute('data-index');
                modalparent[ElementIndex].style.display = "none";
            };

        }

        window.onload = function() {

            setDataIndex();
        };

        window.onclick = function(event) {
            if (event.target === modalparent[event.target.getAttribute('data-index')]) {
                modalparent[event.target.getAttribute('data-index')].style.display = "none";
            }

            // OLD CODE
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };

//XXXXXXXXXXXXXXXXXXXXXXX    Modified old code    XXXXXXXXXXXXXXXXXXXXXXXXXX

// Get the modal

        var modal = document.getElementById('myModal_modal');

// Get the button that opens the modal
        var btn = document.getElementById("_my_Btn");

// Get the <span> element that closes the modal
        var span = modal.getElementsByClassName("close")[0]; // Modified by dsones uk

// When the user clicks on the button, open the modal

        btn.onclick = function() {

            modal.style.display = "block";
        }

// When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };
</script>
		
</html>