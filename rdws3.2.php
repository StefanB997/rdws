<?php 
if($_GET['strana'] == 'studenti'){
	include 'rdws3.1.php';
}
else {
	include 'rdws3.php';
}
?>
 <a href="?strana=predavaci">predavac</a>
 <a href="rdws3.2.php?strana=studenti">student</a>