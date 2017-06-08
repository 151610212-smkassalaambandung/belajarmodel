<!DOCTYPE html>
<html>
<head>
	<title>looping</title>
</head>
<body>
   <center>
	<table border="10">
	   <tr>
	   	  <td>
			<center>	   	  
				<center><h1>Daftar: {{$data}}</h1></center>
				@foreach($hihi as $data)
		 		{{$data}}<hr>
		 		@endforeach
		    </center>
		  </td>
		</tr>
	 </center>
   </table>
</body>
</html>