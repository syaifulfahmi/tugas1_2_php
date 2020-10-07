<?php
echo "<h1>Daftar Menu</h1>";
$menu1 = "Cireng";
$menu2 = "Es Duren";
$menu3 = "Es Milo";
$menu4 = "Es Teh";
$menu5 = "Piscok";
$harga1 = "Rp. 1000";
$harga2 = "Rp. 15000";
$harga3 = "Rp. 20000";
$harga4 = "Rp. 5000";
$harga5 = "Rp. 1000";



echo "<table border='1'>
		<tr>
			<td>No</td>
			<td>Nama Menu</td>
			<td>Harga</td> 
		</tr>
		<tr>
			<td>1</td>
			<td>".$menu1."</td>
			<td>".$harga1."</td> 
		</tr>
		<tr>
			<td>2</td>
			<td>".$menu2."</td>
			<td>".$harga2."</td> 
		</tr>
		<tr>
			<td>3</td>
			<td>".$menu3."</td>
			<td>".$harga3."</td> 
		</tr>
		<tr>
			<td>4</td>
			<td>".$menu4."</td>
			<td>".$harga4."</td> 
		</tr>
		<tr>
			<td>5</td>
			<td>".$menu5."</td>
			<td>".$harga5."</td> 
		</tr>
	</table>"
?>