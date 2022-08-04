<link rel="stylesheet" type="text/css" href="style.css">

<h1 style="color: royalblue;" align="center">ODACIOUS</h1><hr style="width: 30%;">

<br/><br/>

<center>
<div class="form_holder">
	<form method="post" enctype="multipart/form-data">
	<input type="text" name="firstname" class="input" placeholder="Type in your Firstname..." style="float: left;">
	<input type="text" name="lastname" class="input" placeholder="Type in your Lastname..." style="float: right;">
	<input type="text" name="username" class="input" placeholder="Type in your Username..." style="float: left;">
	<input type="password" name="password" class="input" placeholder="Type in your Password..." style="float: right;">
	<input type="email" name="email" class="input" placeholder="Type in Your E-mail Address..." style="float: left;">
	<select name="gender" class="select" style="float:right;">
		<option>Select Gender</option>
		<option>Male</option>
		<option>Female</option>
	</select>
	<select name="country" class="select" style="float: left">
		<?php include 'countries.html'; ?>
	</select><br/><br/>
	<input type="file" name="profile_picture" class="choose_file" style="float: right;">
	<label style="color: white; font-weight: bold; float: right;">Profile Picture</label><br/><Br/>

	<button class="sign_up-btn" name="sign_up">Sign Up</button>

	</form>
		<a href="login.php"><button class="sign_up-btn" style="float: right;">Login</button></a>

</div>
</center>


<?php include 'register_action.php'; ?>

<style type="text/css">

body {
	background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("imgs/mypic2.jpg");
	background-position: center;
	background-size: cover;
	position: relative;
}

.form_holder {
	height: 60%;
	width: 50%;
}
.input {
border: none;
height: 70px;
width: 50%;
border-radius: 5px;
background: lightgrey;
border-spacing: 10px;
}
.select {
	height: 70px;
	width: 50%;
	border-radius: 5px;
	background: lightgrey;
	border: none;
}
.choose_file {
	height: 70px;
	width: 50%;
	border-radius: 5px;
	background: lightgrey;
	border: none;
}
.sign_up-btn {
	display: inline-block;
	text-decoration: none;
	color: #fff;
	border: 1px solid #fff;
	padding: 12px 34px;
	font-size: 13px;
	background: transparent;
	position: relative;
	cursor: pointer;	
}
.sign_up-btn:hover {
	transition: 1s;
	background: royalblue;
}
</style>