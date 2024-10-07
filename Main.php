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
            width: 170px;
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

.mySlides {display: none;}
img {vertical-align: 400;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}




/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 10%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.footer-area {
  color:white;
}
.mini-footer{
  background-color: navy;
  color:white;
  height: 30px;
}
.footer-big{
  color: #280068;
}
.a:hover{
  color: #ffffff;
}
* {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
  
}
h1{
 color : green;
 border-left: 6px solid red; 
 background-color: lightgrey;
 
}
.row{
  background-color: hotpink;
  
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
  font-size: 20px;
  font: bold;
}

    </style>
    
    <body>
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
        </div>
        <div class="slideshow-container">

          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="https://www.tablespoon.com/-/media/images/articles/content/know-your-sushi/know-your-sushi-hero.jpg?w=800"alt="custom_html_banner1" style="width:100%" height="400">
            
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="https://nucleus-production.s3.amazonaws.com/uploads/fowj6FsZYlHpwvp5NsyDPuPpgmSbZdnsufFe4SH2.jpeg"alt="custom_html_banner1" style="width:100%" height="400">
            
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="https://www.unthsc.edu/newsroom/wp-content/uploads/sites/16/Food-insecurity-donations-WEB.jpg"alt="custom_html_banner1" style="width:100%" height="400">
            
            
          </div>
          
          </div><center>
          <table border="1" Width=90% >
            <tr bgcolor="DarkKhaki"><th colspan="2"><h3>..TARGET..</h3><h3>&nbsp;&nbsp;&nbsp;&nbsp;Order Online Food to save timing and help to Orphanage/Old-Age homes.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th></tr>
            <tr>
              <th bgcolor="DarkSeaGreen"><h3> OUR MISSION</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -HELP TO ORPHANAGE AND OLD-AGE HOMES___&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>-SAVE TIME BY USING ONLINE ORDERING FOOD SYSTEM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
             <th bgcolor="YellowGreen"><h3> OUR GOAL</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "SHOW PEOPLE THAT  ORDERING ONLINE FOOD IS THE BEST"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
            </tr>
          </table></center>

<br> <br>
          <div class="row">
  <div class="column">
    <img src="data:image/png;base64,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" alt="Snow" style="width:90%" height="25%">
    <h3><center><b> Donate</b> </center></h3>
  </div>
  <div class="column">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_9rVG1vW_iu-HjEYrPZGGhiD6d9DyOq2CmQ&usqp=CAU" alt="Forest" style="width:90%" height="30%">
    <br> <h3> <center><br><b>Order</b> </center> </h3>
  </div>
  <div class="column">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAREAAAC5CAMAAAA4cvuLAAAAgVBMVEX39/cAAAD////7+/vc3Nzq6uplZWXFxcWUlJQaGhoeHh7w8PBwcHAHBwenp6c2NjbLy8vj4+PR0dGmpqbm5uZ8fHxbW1u5ubnf39+NjY1SUlJtbW1BQUF4eHi9vb07Ozuenp6EhIQpKSmwsLBISEgwMDARERElJSVWVlZNTU1gYGA5yLq8AAAMdklEQVR4nO1daWOiMBCFBETFKt63Yqna7f//gUsCCQEm4ajVgLxPu9VSeGaOvJmJhtGhQ4cOHTp06NChQ4cOHbQBfvUN6AY0tjtOBGD3x1yhV9+FRkDezTTNcUdJDIy3JsW0sxsKND1HhJjnjpEQGAUmx6Wzm9Cl9kwB3tuvEuSZKXy4700JRhczg95b2w3aTLKEmGbwxpTgIM/He4dgfAIZOb/xIsl7EYrtG1OCP0FKZm9sNxuQkdur7+uFQHOQkv0b2w36BilpaQjGBCgL8kPhPS7IiLlomSuhRBgLywvmvt/fbi+XZYjLtu/788Cxpm5ITPxWBIfgrzYtkpAN2/NHkxv86RN8XI8Beztagm/pt4SSkA13vYRjagY7/sjtDcEhHVP/UIaN1CrAFvjyrfGMYGT7wMZNAaaFIB98ueEhGGHnpxIdZBUwLQT9A19fN5cSjNx5Kd+RAStHtC4EI3dbgw4CP6ZEEoL/NXOR1OfDTAIKOioZaxIwht1iSXzwCw3B162m2Q1GJ0UeVgbclczAl4cNYwRtdr/jwxRcCbzWjk2yG4z7v+bDFFwJHIJPzaEEWdXyMRnuceMItuHXm9JDgdFDFggBy03RGnx514xFguyvRxGSNEmgPfhyI0Iwch7HhynEWDhwNSAEo1/kZBBYjJWE4E/dGcHG6rGECK4Edk5Lve0GL66PJiRRmhHsntY6rxI0+3g8Iaa5iUPwAnrx5mjMSLbf41G4sjwNqI73dO4pkWzbH4CjNAQH6A8Jwb8Avd3HRt0UuGKWDsGTxV+6Vew59TGVRscHIe4bSf+R7V8ukPAj/s0Nu7D4N7msrUUYkd3NbLz8VRSaMFeSZDsD74/jLhrUv98wlway7ItFy5bk4rSiOZ3/YvvH0g7EKhx/71J/w0j4yDkncnGzazokxYNr22UQpx14Gv33T11qwsitXwvhzWazp9sMXNIYeXV3gVe2SEgIPk+fkKkSRoa5Yn0p4NAtp2//LF3SWLKvL8IhudHeX7tUkZHav5yuUE1UE0LIgLV1JX6SLgps/7VLZTcaM5Jv6ihCXuIiK0R2HVwnc0m3xD8pS40ZwbNVrxpWbrY/itRs0Qm+zoh4AOzCuqkM85fsbxkjlT+/cxh6U7I7ybmzjkVAPzQALKlKwXBes+GvzQjpME39wJUrxRTnDZIW6gAMNi9SQGozcsLp3yGtH0jdC0AUD3RWvoXj38s2t7UZWeC0kOjmg3EO8/A95aLw8imB9qGM9HDajRARUFJw4vgif29U5uqv7NSsyQhpWkhtEsNAI2mV4tiFvhVSf3IYWK8UUesxQlqBUmof0cYlTf4MZG6olLq0eu0oeD1GSOqR8hrEr6rXyKUsIf7rXEh9RuiYWGo4iEo7qpoNqcKV2dsM4L2i7oxEzy8UUuJeKEnvmBnpg5IRgBT2r1eU6zASTRKKjclB9BxST0I++DJVPx2mAeowEjWdiumYG11MMhsztEkCXxx2d7YGhNRhZBAviKSV+Yc9CYLam3dh7MBGcevRE/SxMqjBSFxGQUm76olPPQB9UiT9xHahAL13dVggRi1GYulTUGj51YBaBekEKS6DTjw9FoiRZ2QSTG1HXeiPiyiIl5VGwqebfbNXJureAqwLHzlG9phUFtRxMnajCSPCUQcZaf+6KBFkBnOsicFQpBmZMOUbHvmJ3sOqSoyRofA86Rk7IpNi3AMukuDfWis+soywpgy4QyF+BMYaa0kWxb8UlT7VYlU+dT+2tfEfDGlG+Hw+ktfhvhkj7FHFRxIZcahPlV7n7NPi37MfuBBpRnijqELq4ozEasgJZuRgKxP3pRVPKmpHSZoR7iPlO5TEaiLJND3Rzxm5UBciUVVvflwLxQgtnvq4JZBmhLfDKYSdg9i1Psl0ZLPKOJVUbcmAnm+wWQDncmahSxtkom/Uw4KmckKSCqA9X0+zfiD2PzQLkaiu2yg5pTWtOzmT55mPWwLZDG1rIFQg/XFng/N+ESWEwF2XK9ofhJG7DffLhD/tGQkNoaiMr+gSjDa/oclgDOa9A4f6D+ReqDDfEEYKoRjNprpauBPGBuhCLjjigyax4/Ywopjfp47VyveVUFypYIiZGtkiRlQTpibNV0AfEi+QGVs9bWJEajb04w+TeiCbiRrqsHHhP2kTI6ZsjdBMd4aBI7z2NDdFnrA1bhUjksaO6OguC5jFCiIPkkphW8WICdcQ8J28Fq6RjEJ0pw11aJbuXG4XI+BJh3Ftws/6kT3G0BBfuxiB7IaVMMPgnNry0rciO9c30DJG8jO3iRIyw0Ir0QeNMVBTXtsYyZbfhH0d2RyjcfTvnk0tBlJaW8eIuRT00bSXoG0AhhcEDpVBsAE2gbePEVJTQPH5Zqe0mEqbk/kAjgUPqLaQkRCjwJl5QV4p2y1iQTlkayz53XYyIsf+RJ/U6sOHiJjaqwGGYT8WiykRUN3NVPoO19Cckd/M60mH+FRXNXRm5OFslIS+jFgvwvSqKSMvRceI/oz8ych/oxk57kcUx6NQ6t2N4h8uR/fcM6xGEqjbIrII/8Yx0txezUEG8dSYO+bb9Wt/ymbJpn2gR8CVDqpVOlhyFP4C2R5qeC5guGM7JfWm5QzTDBwjew42CMiPVcKq4ijAbFwC1OwrFMKNxyzp+fheGzEd+CT7wBUFrIJZgQxImXOrvuDzQY6U5Y7i07djOpCleDTF4TDKqbQcvlBUFdXnTKLQWtaJcnGZIWYtvrL5VHXMFKrkXDc4agnWxbfiWbKL/zkxaxFdCgyV2VfbQm9RpLXpckoTl/oOc24tM0WPIoPyFF1chZE7jpuZnvXIBYj6Ee8Xi1nLVG0tpRipFoA9HNmZLudW0d5Th1nLuuwpospgKTlAVIIRiuzsWxOzoeXZfVRuqzCrrfwyt4paHLkUUWF1OUyT2TCqdGh3oGSkQpL2TY2F5jC6nBxJ60wsTyoN9XcglnWtV578kHnHT00YodOYJE8qGNRN46C8+1InRX0sheSHdthok5KQfJXkSSWH+SMojb4EI1Dyo8vZzbQS10eGtKYCQulIihg5i8kP12a+dYm/dFvB86SyUJ4prPYjSfKzSJIf5lK0AO0pJHlSpcRqo9jrKVxSz2E6Awb2U5qApiQkT6p0WqTC6KUXOo9dbi1J8rM6YZ3oIKDm4lbcjyjSVjiQ37YWm5VY9Ln6MJlrZC0ctCWXpCSXKozIv+EdAVujPbcWN+BbhZtm1sLBthXVUhLpqf75y3wFzFqwl0yF9xxDSzoIaLRcYHEM7Tq2rKDgu6skOUlmqd37G2Ytm8RaDhoO5wmghk8O0eSb1iOZnkMFZnSA2zdTquLIS6yF98l/bC09rYUDx9sK/jBsDgCptbQfsH8zERW/ApaYIic5sZS5FK3BlE7GANvsFx3OuwLGjVj397Af9xghtEmCzyHQ13mIYEona1Tm7cxF+fghezYGa1c8eiwxdcfcHQ23m0bQYRjxucTkZqNdBi/DFu/ZTuIzxueNJhUfw0lsiLmUZoApnfFgKs++Sux1vllOEbpiO/QWE3+RVHx408G/IHeur96giTdJSSLHweZ3y5w6FJqOb5EysE28J1gf/exPm0UHRax0xuJidNgUgg/ggTAY3mT10eOsSdbCwZRO1rc8JmX+SocQC/XR2YX/dLduRmzJg5rLFQkHSqwqffdKInrYPtew7zqJHpVBM3iSklQ7Ypfi58Sch7EWWy40T0wLQDP4CzKA+To1kvooFuqjq8ZaCwfN4G/kX1XoGID10bO/aDodBLTeecIlD0+l2Ds8E0tEjw9dRY/KoBl8DxUfwhvjkEiEXr7lohWgoiJJSaSTDgK2XPSY9nliOpk3LDEtAM3g55Lx9rS18G2cIYgexKW8+hkeC5qSHJDsqEgGmUTYyMS0ADSDlx0KEeFTkAi33LqYS2kdaEqyVaQkx0QiHHPWhtpLhPVBM/gbkmgAu8RaBNFj3yjRozLo4e8OBr7G6e5zidDa8tr1V9NEj8pgLVjZtqkj7/Rwk++zujVS9KgK1oKFhYGb7zUGRI+R11rnkQLN4MUWrCvYFL5rvbVw0Az+wOqdN7EpnEuE17ewFg7egjWRNIUvmykR1geb7MAzuC+qRdu4kqAZ/JAegWBkJMLPRkuE9UHrnV6+Kbw1okdlxC1Y2vdFPRFRSjLtc2s5a9kX9UTQDJ6H2tulvdu4shAzeJ37op4I1g7QWtGjMqIMvsWiR2WEGfze6egQgTtr6dChQ4cOHTp06NChQwf98B/j2rvnrYNqSAAAAABJRU5ErkJggg==" alt="Mountains"  style="width:90%" height="30%">
  <h3> <center><br><b> Pay Money</b> </center> </h3><br>
  </div>
</div>


          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>
        <footer class="footer-area footer--light">

              <div class="footer-big" style="background-color:#7a78cad8" color="color:#ffffff" frameset cols = "30%,40%,30%" framespacing=200>
                
                <table width=90% height=70%>
                  <tr>
                    <th><h3><center>ABOUT US</center></h3></th>
                    <th><h3><center>FOR HELP</center></h3></th>
                    <th><h3><center>CONTACT</center></h3></th>
                    <th><h3><center>INFORMATION</center></h3></th>
                    <th><h3><center>STRUCTURE</center></h3></th>
                    <th><h3><center>OTHER LINKS</center></h3></th>
					 <th><h3><center>Admin</center></h3></th>
                  </tr>
                    
                  <tr>
                    <td><center><a href="Terms&Condition.php">Terms & Conditions</a></center></td>
                    <td> <center><a href="About.php">Go To About Page</a></center> </td>
                    <td> <center><a href="https://mail.google.com/mail/u/0/?pli=1#inbox">Email ID: umiquefood3721@gmail.com</a></center></td>
                    <td> <center><a href="index.php">TO Order Food</a></center></td>
                    <td> <center><a href="OrderStructure.php">Order Structure</a></center> </td>
                    <td> <center><a href="https://play.google.com/store/apps/details?id=in.swiggy.android">ORDERFOODSWIGGY.Com </a></center></td>
					<td rowspan="7" align="center"><a href="login.php"><img src="group.jpeg" width="120px" height="150px"></a></td>
				  </tr>
                  <tr>
                    <td> <center><a href="Shoppingpolicy.php">Shopping Policy</a></center></td>
                    <td> <center><a href="About.php">Got to Help Page </center></td>
                    <td><center><a href="https://www.facebook.com/unique.foods.790">FaceBook: unique_Food</a></center></td>
                    <td> <center><a href="Donation.php">To Donate___ </a></center></td>
                    <td><center><a href="MenusStructure.php">Menus Structure </a></center></td>
                    <td><center><a href="https://jungleworks.com/">JUNGLEWORK </a></center> </td>
                  </tr>
                  <tr>
                    <td><center><a href="CancellationPolicy.php"> Cancellation Policy</a></center> </td>
                    <td><center> _____</center> </td>
                    <td> <center><a href="https://www.instagram.com/p/CN40JCtj2NI_mmHzx3s8jH1Xw91KFV0JUPJc180/?igshid=1vkwo3srkgdo2">Instagram: @unique_food_3721</a> </center></td>
                    <td> <center> <a href="https://docs.google.com/forms/d/e/1FAIpQLSdV49XB5eM_KAIeyOOFYHKES7fBlBGwyU3wuDCvHUkVEmhIZg/viewform?usp=sf_link">For FEEDBACK___</a></center></td>
                    <td> <center><a href="DonationStructure.php">Donation Structure</a></center></td>
                    <td> <center> <a href="https://www.roseindiancuisine.com/">ROSE INDIAN </a></center></td>
                  </tr>
                  <tr>
                    <td><center> <a href="PrivacyPolicy.php">Privacy Policy</a></center> </td>
                    <td> <center> _____ </center></td>
                    <td><center><a href = "https://twitter.com/unique_Food_?s=08"> <font >Twitter: @unique_Food.com</a></center></td>
                    <td><center>_____</a></center> </td>
                    <td><center>______</center> </td>
                    <td><center>______</center> </td>
                  </tr>
                  <tr><td>   </td><td>      </td><td>    </td><td>    </td><td>   </td> </tr>
                  <tr><td>   </td><td>      </td><td>    </td><td>    </td><td>   </td> </tr>
                  <tr><td>   </td><td>      </td><td>    </td><td>    </td><td>   </td> </tr>
                  <tr><td>   </td><td>      </td><td>    </td><td>    </td><td>   </td> </tr>
                </table>
              </div>

  <div class="mini-footer">
    <div class="container">
      <div class="rows">
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
   </head>
    <script>
       var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
        </script>
    </body>
</html>                 