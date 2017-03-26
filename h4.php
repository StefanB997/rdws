<form method="get" action="hw4page.php">
<p>Enter PIN:</p>
User Name:
<input type="text" placeholder="User Name" name="username">
<br/>
Gender:
<input type="radio" name="gender" value="">Male</input>
<input type="radio" name="gender" value="">Female</input>
<br/>
Password:
<input type="text" placeholder="Password" name="password">
<br/>
Pin:
<input type="text" placeholder="Pin" name="pin">
<br/>
Confirm Pin:
<input type="text" placeholder="Confirm Pin" name="cpin">
<br/>
<button type="submit">Log In</button>
</form>

<?php

if(count($_GET) > 0){
	if(isset($_GET['username']) && strlen($_GET['username']) > 6 && strlen($_GET['username']) < 10 && (preg_match('/[^A-Za-z0-9\-]/', ($_GET['username'])) == 0) && isset($_GET['password']) && strlen($_GET['password']) > 6 && strlen($_GET['password']) < 10 && (preg_match('/[a-zA-Z]/', ($_GET['password']) >= 1)) && (preg_match('/\d/', ($_GET['password']) >= 1)) && (preg_match('/[#$]/', ($_GET['password']) >= 1)) && isset($_GET['gender'])) {
		if(isset($_GET['pin']) && is_numeric($_GET['pin']) && strlen($_GET['pin']) == 4 && isset($_GET['cpin']) && is_numeric($_GET['cpin']) && strlen($_GET['cpin']) == 4){
				if($_GET['cpin'] === $_GET['pin']){
					echo "Pins are valid";
				} else {
					echo 'Pins are not the same<br/>';
				}
		} else {
		 echo 'Invalid Pin';
		}
	} else {
		echo 'Invalid pins or user or password';
	}
}
?>