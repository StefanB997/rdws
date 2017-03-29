<?php 
$predavac = array ('ime' => 'Stefan', 'prezime' => 'Blazhevski', 'godina' => 1997);
?> 
 
<table border="1">

<?php foreach($predavac as $key => $value){ ?>
	<tr>
		<td><?php echo $key; ?></td>
		<td><?php echo $value; ?></td>
	</tr>
<?php } ?>

</table>


<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border ="1">
	<tr>
		<td>Ime</td>
		<td>Stefan</td>
	</tr>	

	<tr>
		<td>Prezime</td>
		<td>Blazhevski</td>
	</tr>

	<tr>
		<td>Godina</td>
		<td>1997</td>
	</tr>
</table>

</body>
</html> -->