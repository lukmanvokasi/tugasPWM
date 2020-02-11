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
			<?php if(session('sukses')): ?>
			    <?php echo e(session('sukses')); ?>;
			<?php endif; ?>

			<h1>Data Pegawai</h1>

			

			<div id="container2">
				FORM
				<form action="/pegawai/<?php echo e($pegawai->id); ?>/update" method="POST">
					<?php echo e(csrf_field()); ?>


					<label for="exampleInput1">Nama </label>
					<input name="nama"type="text" id="exampleInput1" value="<?php echo e($pegawai->nama); ?>"></br>

					<label for="exampleFormControlSelect1">Gender</label>
					<select name="gender">
					<option value="L" <?php if($pegawai->gender == 'L'): ?> selected <?php endif; ?>>Laki-Laki</option>
					<option value="P" <?php if($pegawai->gender == 'P'): ?> selected <?php endif; ?>>Perempuan</option>
					</select></br>

					<button type="submit">Submit</button>
				</form>
			</div>
		</div>
	</body>
</html>



<?php /**PATH C:\xampp\htdocs\MIMIK\resources\views/pegawai/edit.blade.php ENDPATH**/ ?>