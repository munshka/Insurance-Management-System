<?php
session_start();

//isset() function checks whether a variable is set, which means that it has to be declared and is not NULL
//session is a way to store information (in variables) to be used across multiple pages.
if(isset($_SESSION["username"])){
	header("Location: home.php");
	}
?>

<head>
<style>

.container{
	width: 450px;
    height: 700px;
    margin:auto;
	margin-top: 4%;
	padding-top: 1px;
	
}

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  padding-top: 30px;
  position: relative;
  z-index: 1;
  background: #111417;
  max-width: 349px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #a9b7de;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  color: white;
}
.form button{
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #214a80;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #4270ad;
}

.form .submit-btn{
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #944000;
  width: 100%;
  border: 0;
  padding: 15px;
  color: black;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form a{
  color: white;
  font-size: 11px;
}
.form .submit-btn:hover,.form button:active,.form a:active,.form button:focus {
background: #820016;
color: white;
}
.form p{
  color: #faf7b6;
  font-size: 11px;
}

.imgs{
    margin-top: 0%;
    margin-left: 20%;
    weight: 40%;
    height: 40%;
}
body {
  background: url(hg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>
<title>Login Page</title>
</head>


<img class="imgs" src="toko.png" alt="Login Logo">
<div class="container">
	<div class="login-page">
	  <div class="form">

		<form class="login-form" action="login.php" method="POST">
		  <input type="text" name="username" id="" placeholder="username"/>
		  <input type="password" name="password" id="" placeholder="password" />
		  <button>login</button>
		</form>

      <button class="submit-btn"><a href="register.php">Dont have an account? <p>Register Now<p></a></button>
	  </div>
	</div>
</div>
