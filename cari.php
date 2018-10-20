<form method="POST">
	<table>
		<tr>
			<td>Cari</td>
			<td>:</td>
			<td><input type="text" name="cari"></td>
			<td><input type="submit" name="find" value="Cari"></td>
			<td><button><a href="index.php">Kembali</a></button>
		</tr>
	</table>
	
</form>

<?php 

if (isset($_POST['find'])) {
	include "koneksi.php";

	$cari = $_POST['cari'];

	$query = mysqli_query($koneksi, "SELECT * FROM mhs WHERE nim ='".$cari."'");
	$result = mysqli_fetch_array($query);

	echo "<table border=1>
				<tr>
					<th>Nama</th>
					<th>NIM</th>
					<th>Jenis Kelamin</th>
					<th>Program Studi</th>
					<th>Fakultas</th>
					<th>Asal</th>
					<th>Moto Hidup</th>
					<th>Aksi</th>
				<tr>";

				foreach ($query as $qry) {
					echo "<tr>
					          <td>".$qry['nama']."</td>
					          <td>".$qry['nim']."</td>
					          <td>".$qry['jns_k']."</td>
					          <td>".$qry['prog_stud']."</td>
					          <td>".$qry['fakultas']."</td>
					          <td>".$qry['asal']."</td>
					          <td>".$qry['moto']."</td>
					          <td><a href = 'deletcari.php?nim=$qry[nim]'>Delete</a>|
					          	  <a href = 'editcari.php?nim=$qry[nim]'>Edit</a>";
}
}

 ?>
