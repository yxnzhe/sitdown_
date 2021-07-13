<head>
    <title>SitDown | MSG Cooperation &copy</title>
    <link rel="icon" type="image/png" href="https://media.discordapp.net/attachments/836606866918080603/849311038079107122/logo_size.png" />
    <link rel="stylesheet" type="text/css" href="..\finalYearProject\css\form.css">
    <script src="..\finalYearProject\js\app.js"></script>
</head>
<?php
    if(isset($_POST["merchant"])){
        echo "<script>alert('welcome merchant')</script>";
    }else if(isset($_POST["customer"])){
        echo "<script>alert('welcome customer')</script>";
    }
?>
<body style="background-color: #1a202c">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST">
			<h1>Welcome Back!</h1><br>
			<input type="email" placeholder="Email" required>
			<input type="password" placeholder="Password" required>
			<button type="submit" name="customer"><input type="submit" style="display: none" name="customer">Sign In</button>
            <p>Dont have an account? <u><a href="register.php">Signup</a></u></p>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST">
			<h1>Welcome Back!</h1><br>
			<input type="email" placeholder="Email" required>
			<input type="password" placeholder="Password" required>
			<button type="submit" name="merchant"><input type="submit" style="display: none" name="merchant">Sign In</button>
            <p>Dont have an account? <u><a href="register.php">Signup</a></u></p>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
                <img src="https://media.discordapp.net/attachments/836606866918080603/849311038079107122/logo_size.png">
				<h1>Customer</h1>
				<p>Login as customer now to book a table at your favourite restaurant!</p>
				<button class="ghost" id="signIn" onClick="changeForm()">Switch to Merchant</button>
			</div>
			<div class="overlay-panel overlay-right">
                <img src="https://media.discordapp.net/attachments/836606866918080603/849311038079107122/logo_size.png">
				<h1>Merchant</h1>
				<p>Login as merchant now to manage your restaurant!</p>
				<button class="ghost" id="signUp" onClick="changeForm()">Switch to Customer</button>
			</div>
		</div>
	</div>
</div>
</body>
<?php require_once "footer.php" ?>

