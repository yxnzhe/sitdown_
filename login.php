<head>
    <title>SitDown | MSG Cooperation &copy</title>
    <link rel="icon" type="image/png" href="https://media.discordapp.net/attachments/836606866918080603/849311038079107122/logo_size.png" />
    <link rel="stylesheet" type="text/css" href="..\sitdown_\css\form.css">
    <script src="..\sitdown_\js\app.js"></script>
</head>
<body style="background-color: #1a202c">
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form method="POST">
			<h1>Welcome Back!</h1><br>
			<input type="email" id="loginEmail" placeholder="Email" required>
			<input type="password" id="loginPass" placeholder="Password" required>
			<button type="button" onclick="userLogin()">Sign In</button>
            <p>Dont have an account? <u><a href="register.php">Signup</a></u></p>
			<span id="loginMsg" class="errorMsg"></span>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
                <img src="https://media.discordapp.net/attachments/836606866918080603/849311038079107122/logo_size.png">
				<h1>SitDown RMS</h1>
				<p>SitDown Restaurant Management System</p>
			</div>
		</div>
	</div>
</div>
</body>
<?php require_once "footer.php" ?>

