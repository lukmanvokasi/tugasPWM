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

			<div id="container1">
				<table>
					<tr>
						<th>NAMA</th>
						<th>JENIS KELAMIN</th>
						<th>AKSI</th>
					</tr>
					<?php $__currentLoopData = $data_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($pegawai->nama); ?></td>
						<td><?php echo e($pegawai->gender); ?></td>
						<td>
							<a href="/pegawai/<?php echo e($pegawai->id); ?>/edit">Edit</a>
				            <a href="/pegawai/<?php echo e($pegawai->id); ?>/delete" onclick="return confirm('Yakin mau dihapus ?')">Delete</a>
				        </td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
			</div>

			<div id="container2">
				FORM
				<form action="/pegawai/create" method="POST">
					<?php echo e(csrf_field()); ?>


					<label for="exampleInput1">Nama </label>
					<input name="nama"type="text" id="exampleInput1"></br>

					<label for="exampleFormControlSelect1">Gender</label>
					<select name="gender">
					<option value="L">Laki-Laki</option>
					<option value="P">Perempuan</option>
					</select></br>

					<button type="submit">Submit</button>
				</form>
			</div>
		</div>
	</body>
</html>



<?php /**PATH C:\xampp\htdocs\MIMIK\resources\views/pegawai/index.blade.php ENDPATH**/ ?>