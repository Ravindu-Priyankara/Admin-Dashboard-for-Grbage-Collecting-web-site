
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Garbage Collector</h1>
		<p>"Cleaner streets, cleaner world - Our garbage collector web app transforms trash, for a greener future. Join the revolution now!"</p>
		<span>
			<p>login with other accounts</p>
			<a href="#">GTF Member</a>
			<a href="#">Green Captain</a>
		</span>
		</div>
	</div>
	
	
		<div class="right">
			<form action="login.php" method="post">
				<h5>Login</h5>
				<p>Don't have an account? <a href="#">Creat Your Account</a> it takes less than a minute</p>
				<div class="inputs">
					<input type="text" placeholder="user name" name="username">
					<br>
					<input type="password" placeholder="password" name="password">
				</div>
					
					<br><br>
					
					<br>
					<button type="submit">Login</button>
			</form>
	</div>
	
</div>
<!-- partial -->
  
</body>
</html>
