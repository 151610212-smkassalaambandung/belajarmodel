<!DOCTYPE html>
<html>
<head>
	<title>model controller</title>
</head>
<body bgcolor="pink">
 	<center>
 		<h1>Dataku</h1>
 		<table border="6">
 			<tr class="bg.info">
 				<th> id : </th>
 				<th> Nama : </th>
 				<th> Alamat : </th>
 				<th> Jenis kelamin : </th>
 			</tr>
 			<?php
 				$no=1;
 			?>
 			@foreach($a as $data)
 			<tr>
 				<td>{{$no++}}</td>
 				<td>{{$data -> nama}}</td>
 				<td>{{$data ->alamat}}</td>
 				<td>{{$data ->jk}}</td>
 			</tr>
 			@endforeach
 		</table>
 </center>

</body>
</html>