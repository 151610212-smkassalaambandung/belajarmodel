<!DOCTYPE html>
<html>
<head>
	<title>looping</title>
</head>
<body>
	<table border="2">
		<tr>
		 <td width="1000">
		  <center>
		      <h1>Buah</h1></center>
		      <br>
		         @foreach($buah as $data)
		         {{$data }}<hr>
		         @endforeach<br>
		 </tr> 
		  </td>
		   </center>
	</table>
	<table border="2">
		<tr>
		 <td width="1000">
         <center><h1>Hewan</h1></center>
		 <br>
		@foreach($hewan as $data)
		 {{$data}}<hr>
		 @endforeach
	</table>

		<center><h1>Komputer</h1></center>
		 <br>
		@foreach($komputer as $data)
		 {{$data}}<hr>
		 @endforeach

</body>
</html>