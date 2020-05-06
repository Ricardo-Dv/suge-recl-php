<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../public/css/loginstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
	<img class="wave" src="../public/images/wavelogin.png">
	<div class="container">
		<div class="img">
			<img src="../public/images/bglogin.svg">
		</div>
		<div class="login-content">
			<form action="ingresar.php">
				<img src="../public/images/avatarlogin.svg">
				<h2 class="title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nickname</h5>
           		   		<input type="text" name="" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" name="contraseña" class="input">
            	   </div>
            	</div>
            	<a href="#">Contraseña olvidada?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../public/js/loginjs.js"></script>
</body>
</html>