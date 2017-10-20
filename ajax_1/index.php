<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Input ke DB</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<style>
		body{
			font-family: "roboto";
			background: #fcfcfc;
		}
		 
		h1{
			text-align: center;
		}
		 
		.wrap{
			width: 500px;
			margin: 10px auto;		
		}
		 
		.tombol-simpan{
			background: #232323;
			padding: 5px 10px;
			color: #fff;	
		}
		 
		table tr td,table tr th{
			padding: 10px;
		}
		 
		.data{
			border-collapse: collapse;
		}
		 
		.data tr th,.data tr td{
			border: 1px solid #232323;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<form action="" method="post" class="form-user">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td><input type="text" name="pekerjaan"></td>
				</tr>
				<tr>
					<td></td>
					<td><a href="" class="tombol-simpan">Simpan</a></td>
				</tr>
			</table>
		</form>

		<div class="tampildata"></div>
	</div>

	<script>
		$(document).ready(function(){
			$('.tampildata').load('tampil.php');
			$('.tombol-simpan').click(function(){
				var data = $('.form-user').serialize();
				$.ajax({
					type 		: 'POST',
					url  		: 'aksi.php',
					data 		: data,
					success 	: function(){
						$('.tampildata').load('tampil.php');
					}
				});
			});
		});
	</script>
</body>
</html>