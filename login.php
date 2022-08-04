<link rel="stylesheet" type="text/css" href="style.css">

<center><h1 style="color: royalblue;">ODACIOUS</h1></center>
<hr style="width: 30%;" /><br/><Br/>

<form method="post">
	<center>
	<div class="form_holder">
	<input type="text" name="username" class="input" placeholder="Type in your Username..."><Br/><br/>
	<input type="password" name="password" class="input" placeholder="Type in your Password..."><Br/><br/>
	<button name="login" class="sign_up-btn">Login</button>
</div>
</center>
</form>

<?php include 'login_action.php'; ?>

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