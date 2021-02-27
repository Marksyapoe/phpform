<!DOCTYPE html>
	<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration</title>
		<style>
			#fn{
				
				margin-left: 70px;
			}
			#ln{
				
				margin-left: 70px;
			}
			#email{
				
				margin-left: 70px;
			}
			#psc{
				
				margin-left: 70px;
			}
			.fnf{
				height: 30px;
				margin-top: 30px;
			}
			#emailspace{
				margin-left: 30px;
			}
			#pwds{
				margin-left: 10px;
			}
			#button2{
				height: 50px;
				width: 150px;
				color: white;
				font-size: 30px;
				font-family: Georgia, 'Nimbus Roman No9 L', 'Century Schoolbook L', serif;
				background-color: purple;
				border-color: white;
				border-radius: 20px;
				margin-left: 100px;
			}
			#button2:hover{
				background-color: black;
			}

			body{
				background-color: rgb(100, 100, 100);
			}

			body #form{
				margin-left: 450px;
				width: 400px;
				height: 600px;
				background-color: white;
				border-radius: 20px;
			}
			#results{
				margin-left: 10px;
			}
			
		</style>
		
		</head>

		<body>
			
			<div id="form">
				<form method="post" action="register.php">
					<p id="fn">First Name: <input type="text" name="name1" placeholder="Enter First name" class="fnf"></p>
					<p id="ln">Last Name: <input type="text" name="name2" placeholder="Enter Last name" class="fnf"></p>
					<p id="email">Email: <input type="email" name="email" placeholder="john@example.com" class="fnf" id="emailspace"></p>
					<p id="psc">password: <input type="password" name="pwd" id="pwds" class="fnf"></p>
					<input type="submit" name="submit" value="Register" id="button2" class="fnf">
				</form>
				<div id="results">
					<?php
						if(isset($_POST['name1']) && isset($_POST['name2']) && isset($_POST['email']) && isset($_POST['pwd'])){
							$firstname = $_POST['name1'];
							$lastname = $_POST['name2'];
							$mail = $_POST['email'];
							$passcode = $_POST['pwd'];
							echo "<br>"."Registration complete, Your details:"."<br>"."<br>"."Firstname: ".$firstname."<br>"."<br>"."Lastname: ".$lastname."<br>"."<br>"."Email: ".$mail."<br>"."<br>"."Password(save this, its important): ".$passcode;
						}

					?>
				</div>
			</div>


			
		</body>
		
	</html>