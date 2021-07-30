<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="header">
        <nav>
            <div class= "nav-links">
                <ul>
                    <li><a href="main/index.html">HOME</a></li> 
                </ul>
            </div>
        </nav>
    <div class="login-box">
		<h1>Login here</h1>
		<img src="main/img/Logo E-Time 2021.png" class="avatar">
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
            <a href="#">Forget Password?</a>
			<p>Belum punya akun ? <a href="sign-up.html" class="sign-up">Daftar di sini!</a></p>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>