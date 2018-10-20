<form action="" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jns_k" value="Laki-Laki">Laki Laki
				<input type="radio" name="jns_k" value="Perempuan">Perempuan</td>
		</tr>

		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prog_stud">
				<option value="0">Program Studi</option>
				<option value="Sisfo">Sistem Informasi</option>
				<option value="DKV">Desain Komunikasi Visual</option>
				<option value="MBTI">Manajemen Bisnis Telekomunikasi Informatika</option>
				<option value="IKOM">Ilmu Komunikasi</option>
				<option value="TI">Teknik Indrustri</option>
				<option value="TIF">Teknik Informatika</option>
			</select></td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="1">Fakultas</option>
				<option value="FIT">Fakultas Ilmu Terapan</option>
				<option value="FIK">Fakultas Indrustri Kreatif</option>
				<option value="FEB">Fakultas Ekonomi Bisnis</option>
				<option value="FKB">Fakultas Komunikasi Bisnis</option>
				<option value="FRI">Fakultas Rekayasa Industri</option>
				<option value="FTI">Fakultas Teknik Informatika</option>
			</select></td>
		</tr>

		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal"></td>
		</tr>

		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td><textarea name="moto"></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Input">
				<a href="index.php"></td>
		</tr>
	</table>
</form>

<?php 

	if (isset($_POST['submit'])) {
		include "koneksi.php";

		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$jns_k = $_POST['jns_k'];
		$prog_stud = $_POST['prog_stud'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];

			$query = "INSERT INTO mhs
					  VALUES ('$nama', '$nim', '$jns_k', '$prog_stud', '$fakultas', '$asal', '$moto')";

			$hasil = mysqli_query($koneksi, $query);
			header("location: index.php");
			echo "Data Masuk";
	}

 ?>