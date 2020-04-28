
/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 10%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}



    
<div class="container">
  <header>
    <div class="primary_header">
      <h1 class="title"> Computer Science Departement&nbsp;&nbsp;</h1>
    </div>
    <nav class="secondary_header" id="menu" bgcolor="aa.bgAnimObj">
      <ul>
        <li>HOME</li>
        <li>WORK</li>
        <li>SERVICES</li>
        <li>STUDENT</li>
        <li>TEACHER</li>
        <li>CONTACT</li>
      </ul>
    </nav>
  </header>
  <section>
    <h2 class="noDisplay">Main Content</h2>
    <artià²																											pPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP000ppcle class="left_article">
      <h3>content heading</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </article>
    <aside class="right_article"><img src="../images/placeholder.jpg" alt="" width="400" height="200" class="placeholder"/> </aside>
  </section>
  <div class="row">
    <div class="columns">
      <p class="thumbnail_align"> <img src="../images/bkg_06.jpg" alt="" class="thumbnail"/> </p>
      <h4>TITLE</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="../images/bkg_06.jpg" alt="" class="thumbnail"/> </p>
      <h4>TITLE</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="../images/bkg_06.jpg" alt="" class="thumbnail"/> </p>
      <h4>TITLE</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="../images/bkg_06.jpg" alt="" class="thumbnail"/> </p>
      <h4>TITLE</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
  </div>
  <div class="row blockDisplay">
    <div class="column_half left_half">
      <h2 class="column_title">STUDENT</h2>
    </div>
    <div class="column_half right_half">
      <h2 class="column_title">TEACHER</h2>
    </div>
  </div>
  <div class="social">
    <p class="social_icon"><img src="../images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="../images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="../images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="../images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
  </div>
  <footer class="secondary_header footer">
    <div class="copyright">&copy;2019 - <strong>ALL RIGHTS RESERVED TO ©INFODEPB - DEVELOPED BY MAHDI BENTALEB&nbsp; &nbsp;</strong></div>
  </footer>
</div>
</body>
</html>


.container {
	background-color: #FFFFFF;
	width: 90%;
	margin-left: auto;
	margin-right: auto;
	border-bottom-width: 0px;
	padding-left: 0px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
}
.row {
	width: 100%;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
	display: inline-block
}
.row.blockDisplay {
	display: block;
}
.column_half {
	width: 50%;
	float: left;
	margin-top: 0px;
}
.columns {
	width: 25%;
	float: left;
	font-family: "Source Sans Pro";
	color: #A5A5A5;
	line-height: 24px;
	padding-top: 10px;
	padding-bottom: 10px;
	text-align: justify;
	margin-top: 15px;
	margin-bottom: 15px;
	padding-left: 0px;
	padding-right: 0px;
	margin-left: 0px;
	margin-right: 0px;
}
.row .columns p {
	padding-left: 10%;
	padding-right: 10%;
}
.container .columns h4 {
	text-align: center;
	color: #01B2D1;
}
.primary_header {
	width: 100%;
	background-color: #52bad5;
	padding-top: 10px;
	padding-bottom: 10px;
	clear: left;
	border-bottom: 2px solid #2C9AB7;
}
.secondary_header {
	width: 100%;
	padding-top: 50px;
	padding-bottom: 50px;
			
	clear: left;
}
/*Define this in your CSS 
.bgColor = Replace it by the name you want to give your animation
.bgAnimObj = Assign this class to the object you want to apply the effect
*/

.bgAnimObj {
	background: #1abc9c;
	/* Chrome, Safari */
	-webkit-animation: bgColor 5s;
	/* Firefox */
	-moz-animation: bgColor 5s;
	/* Standard Syntax */
	animation: bgColor 5s;
}

/* 
Define the keyframe and changes
*/

/* Chrome, Safari */
@-webkit-keyframes bgColor {
	from {
 		background: #1abc9c;
	} 
	to {
 		background: #ebebeb;
	}
}

/* Firefox */
@-moz-keyframes bgColor {
    from {
        background: #1abc9c;
    }
    to {
        background: #ebebeb;
    }
}

/* Standard syntax */
@keyframes bgColor {
	from {
		background: #1abc9c;
	}
	to {
		background: #ebebeb;
	}
}

.container .secondary_header ul {
	margin-top: 0%;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 15px;
	padding-left: 0px;
	width: 100%;
}
.secondary_header ul li {
	list-style: none;
	float: left;
	margin-right: auto;
	margin-top: 0px;
	font-family: "Source Sans Pro";
	font-weight: normal;
	color: #000000;
	letter-spacing: 1px;
	margin-left: auto;
	text-align: center;
	width: 16%;
	transition: all 0.3s linear;
}
.secondary_header ul li:hover {
	color: #717070;
	cursor: pointer;
}
.left_article {
	background-color: #FFFFFF;
	width: 60%;
	float: left;
	font-family: "Source Sans Pro";
	color: #343434;
	padding-bottom: 15px;
}
.noDisplay {
	display: none;
}
.container .left_article h3 {
	padding-left: 5%;
	padding-right: 5%;
	margin-top: 5%;
	color: #717070;
	font-weight: bold;
	text-transform: uppercase;
}
.container .left_article p {
	padding-left: 5%;
	padding-right: 5%;
	text-align: justify;
	line-height: 24px;
	margin-top: 30px;
	margin-bottom: 15px;
	color: #B3B3B3;
}
.right_article {
	width: 40%;
	float: left;
	background-color: #F6F6F6;
}
.container .right_article ul {
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
}
.right_article ul li {
	font-family: "Source Sans Pro";
	list-style: none;
	text-align: center;
	background-color: #B3B3B3;
	width: 90%;
	margin-left: auto;
	margin-right: auto;
	margin-top: 10px;
	margin-bottom: 10px;
	padding-top: 15px;
	padding-bottom: 15px;
	color: #FFFFFF;
	font-weight: bold;
	border-radius: 0px;
	transition: all 0.3s linear;
	border-left: 5px solid #717070;
}
.right_article ul li:hover {
	background-color: #717070;
	cursor: pointer;
}
.footer {
	background-color: #717070;
}
.title {
	font-weight: bold;
	font-style: normal;
	font-family: "Source Sans Pro";
	text-align: center;
	color: #FFFFFF;
	letter-spacing: 2px;
}
.placeholder {
	/* [disabled]max-width: 400px;
*/
	/* [disabled]max-height: 200px;
*/
	width: 100%;
	padding-top: 30px;
	/* [disabled]padding-left: 19px;
*/
	padding-bottom: 30px;
	height: 100%;
}
.left_half {
	background-color: #52BAD5;
}
.container .column_half.left_half h2 {
	color: #FFFFFF;
	font-family: "Source Sans Pro";
	text-align: center;
}
.right_half {
	background-color: #01B2D1;
	color: #FFFFFF;
	font-family: "Source Sans Pro";
	text-align: center;
	font-weight: bold;
}
.column_title {
	padding-top: 25px;
	padding-bottom: 25px;
}
.copyright {
	text-align: center;
	background-color: #717070;
	color: #FFFFFF;
	text-transform: uppercase;
	font-weight: lighter;
	letter-spacing: 2px;
	border-top-width: 2px;
	font-family: "Source Sans Pro";
}
body {
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
}

@media (max-width: 320px) {
.secondary_header ul li {
	float: none;
	margin-top: 28px;
	margin-left: 0px;
	width: 100%;
}
.container .secondary_header ul {
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
	height: auto;
	width: 100%;
	text-align: center;
}
.secondary_header {
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	padding-top: 1px;
	padding-bottom: 40px;
}
.left_article {
	width: 100%;
	height: auto;
}
.right_article {
	width: 100%;
	height: auto;
}
.placeholder {
	width: 100%;
	margin-top: 22PX;
	margin-right: 0px;
	margin-bottom: 22PX;
	margin-left: 0px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
	max-width: 400px;
	max-height: 200px;
	height: auto;
}
.columns {
	width: 100%;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	padding-top: 0PX;
	padding-right: 0PX;
	padding-bottom: 0PX;
	padding-left: 0PX;
}
.columns p {
	padding-left: 10px;
	padding-right: 10px;
}
.column_half.left_half {
	width: 100%;
}
.column_half.right_half {
	width: 100%;
}
.copyright {
	padding-top: 25px;
	padding-bottom: 0px;
	margin-bottom: 0px;
}
.container .left_article h3 {
	margin-top: 30px;
}
.social .social_icon img {
	width: 80%;
}
.container .secondary_header {
}
}

@media (min-width: 321px) and (max-width: 768px) {
.secondary_header ul li {
	float: none;
	margin-top: 28px;
	margin-left: 0px;
	width: 100%;
}
.container .secondary_header ul {
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
	height: auto;
	width: 100%;
	text-align: center;
}
.secondary_header {
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	padding-top: 1px;
	padding-bottom: 40px;
}
.left_article {
	width: 100%;
	height: auto;
}
.right_article {
	width: 100%;
	height: auto;
	padding-bottom: 25px;
}
.placeholder {
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
	width: 100%;
	max-width: 100%;
	height: auto;
	max-height: 100%;
}
.columns {
	width: 100%;
	margin-top: 6px;
	margin-right: 0px;
	margin-bottom: 6px;
	margin-left: 0px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
}
.columns p {
	padding-left: 14px;
	padding-right: 14px;
}
.column_half.left_half {
	width: 100%;
}
.column_half.right_half {
	width: 100%;
}
}

@media (min-width: 769px) and (max-width: 1000px) {
.secondary_header {
	overflow: auto;
	padding-top: 30px;
	padding-bottom: 30px;
}
.secondary_header ul li {
	margin-top: 10px;
	margin-right: 7%;
	margin-bottom: 10px;
	margin-left: 7%;
}
.left_article {
	height: auto;
}
.right_article {
	height: auto;
	padding-bottom: 27px;
}
.placeholder {
	width: 100%;
	margin-left: 0px;
	margin-right: 0px;
	padding-left: 0px;
	padding-right: 0px;
}
.columns {
	width: 50%;
	float: left;
	padding-left: 0px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
}
.container .columns p {
	padding-left: 25px;
	padding-right: 25px;
}
}

@media (min-width: 1001px) {
}
.thumbnail {
	width: 100px;
	border-radius: 200px;
	height: 100px;
	margin-left: auto;
}
.thumbnail_align {
	text-align: center;
}
.social {
	text-align: center;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	width: 100%;
	background-color: #414141;
	clear: both;
	overflow: auto;
}
.social_icon {
	width: 25%;
	text-align: center;
	float: left;
	transition: all 0.3s linear;
	line-height: 0px;
	padding-top: 7px;
}
.container .social .social_icon:hover {
	cursor: pointer;
	opacity: 0.5;
}
#menu {
}


 <input type="text" class="input_field" placeholder="User ID" name="userid" required>
            <input type="email" class="input_field" placeholder="Enter Email" name="email" required>
            <input type="password" class="input_field" placeholder="Enter Password" name="psw" required>
            <input type="checkbox" class="checkbx" name="agreeTaC"><span>I agree to terms and conditions</span>
            <button type="submit" class="submit-btn">Sign Up</button>
            <button type="button" class="cancel-btn" onclick="location.href='accueil.html';  ">Cancel</button>






<html>
<head>
    <link href="signin.css" type="text/css" rel="stylesheet">
    </head>
<body>
<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="avatar-367-456319.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
    </body></html>