<!DOCTYPE html>
<html>
	<head>
		<title>PEGAWAI</title>
		<style type="text/css">
			#big {
				width: 1350px;
				height: 639px;
				border: 1px solid black;
			}
			#container1 {
				width: 400px;
				border: 1px solid black;
				float: left;
			}
			#container2 {
				width: 800px;
				border: 1px solid black;
				float: right;
			}
		</style>
	</head>
	<body>
		<div id="big">
			@if(session('sukses'))
			    {{session('sukses')}};
			@endif

			<h1>Data Pegawai</h1>

			

			<div id="container2">
				FORM
				<form action="/pegawai/{{$pegawai->id}}/update" method="POST">
					{{csrf_field()}}

					<label for="exampleInput1">Nama </label>
					<input name="nama"type="text" id="exampleInput1" value="{{$pegawai->nama}}"></br>

					<label for="exampleFormControlSelect1">Gender</label>
					<select name="gender">
					<option value="L" @if($pegawai->gender == 'L') selected @endif>Laki-Laki</option>
					<option value="P" @if($pegawai->gender == 'P') selected @endif>Perempuan</option>
					</select></br>

					<button type="submit">Submit</button>
				</form>
			</div>
		</div>
	</body>
</html>



