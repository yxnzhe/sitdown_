<head>
    <title>SitDown | MSG Cooperation &copy</title>
    <link rel="icon" type="image/png" href="https://media.discordapp.net/attachments/836606866918080603/849311038079107122/logo_size.png" />
    <link rel="stylesheet" type="text/css" href="..\sitdown_\css\form.css">
    <script src="..\sitdown_\js\app.js"></script>
</head>
<?php
    echo "<script>window.onload = function() {changeForm();};</script>"; //call js changeForm() function  
?>
<body style="background-color: #1a202c">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST">
			<!-- Customer register form -->
			<h1>Join us now!</h1><br>
            <input type="text" id="cusRegName" placeholder="Name" name="name" required>
			<input type="email" id="cusRegEmail" placeholder="Email" name="email" required>
            <input type="text" id="cusRegPhone" placeholder="Phone Number" name="phone_no" required>
            <input type="password" id="cusRegPass" placeholder="Password" required>
			<input type="password" id="cusRegConPass" placeholder="Confirm Password" required>
			<button type="button" onclick="customerRegister()" name="customer">Sign Up</button>
            <p>Already have an account? <u><a href="login.php">Login</a></u></p>
			<span id="customerRegMsg" class="errorMsg"></span>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST">
			<!-- Merchant register form -->
			<h1>Join us now!</h1><br>
			<input type="text" id="merRegName" placeholder="Name" name="name" required>
			<input type="email" id="merRegEmail" placeholder="Email" name="email" required>
            <input type="text" id="merRegPhone" placeholder="Phone Number" name="phone_no" required>
            <input type="password" id="merRegPass" placeholder="Password" required>
			<input type="password" id="merRegConPass" placeholder="Confirm Password" required>
			<button type="button" onclick="merchantRegister()" name="merchant">Sign Up</button>
            <p>Already have an account? <u><a href="login.php">Login</a></u></p>
			<span id="merchantRegMsg" class="errorMsg"></span>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
                <img src="https://media.discordapp.net/attachments/836606866918080603/849311038079107122/logo_size.png">
				<h1>Customer</h1>
				<p>Register as customer now to make reservation for your favourite restaunrant!</p>
				<button class="ghost" id="signIn" onClick="changeForm()">Switch to Merchant</button>
			</div>
			<div class="overlay-panel overlay-right">
                <img src="https://media.discordapp.net/attachments/836606866918080603/849311038079107122/logo_size.png">
				<h1>Merchant</h1>
				<p>Register as merchant now to start accepting reservation from our system!</p>
				<button class="ghost" id="signUp" onClick="changeForm()">Switch to Customer</button>
			</div>
		</div>
	</div>
</div>
</body>
<?php require_once "footer.php" ?>
