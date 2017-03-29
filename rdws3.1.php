<?php 
$studenti = array(
array('ime' => 'Stefan', 'prezime' => 'Blazevski', 'godina' => 1997),
array('ime' => 'Stefan', 'prezime' => 'Stojkovski', 'godina' => 1989)
);
$brojac = 1;
?>
<table border = 1>
<tr>
	<th>Broj</th>
	<th>Ime</th>
	<th>Prezime</th>
	<th>Godina</th>
</tr>

<?php foreach($studenti as $indeks => $student){ ?>
<tr>
	<td><?php echo $indeks+1; ?></td>
	<td><?php echo $student['ime']; ?></td>
	<td><?php echo $student['prezime'] ?></td>
	<td><?php echo $student['godina'] ?></td>
</tr>
<?php } ?>
</table>
