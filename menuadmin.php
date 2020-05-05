<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<h1>Halaman Admin</h1>
	
	<br/>

	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../admin.php?pesan=belum_login");
	}
	?>
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?></h4>
    <br/>


<!---------isi------------->
    <h2>Tambah Film</h2>
	<br/>
	<form method="post" action="tambahfilm.php">
		<table>
			<tr>			
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Tahun</td>
				<td><input type="text" name="tahun"></td>
			</tr>
			<tr>
				<td>Genre</td>
				<td><input type="text" name="genre"></td>
            </tr>
            <tr>
				<td>Sinopsis</td>
				<td><input type="text" name="sinopsis"></td>
            </tr>
            <tr>
				<td>GD</td>
				<td><input type="text" name="gd"></td>
            </tr>
            <tr>
				<td>Foto</td>
				<td><input type="text" name="foto"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
    </form>
    <br>
    <!----menampilkan data------>
	<table border="1">
		<tr>
            <th>id</th>
			<th>Judul</th>
			<th>Tahun</th>
			<th>Genre</th>
			<th>Sinopsis</th>
            <th>GD</th>
            <th>foto</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from film order by id desc");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
            <td><?php echo $d['id']; ?></td>
				<td><?php echo $d['judul']; ?></td>
				<td><?php echo $d['tahun']; ?></td>
                <td><?php echo $d['genre']; ?></td>
                <td><?php echo $d['sinopsis']; ?></td>
                <td><?php echo $d['gd']; ?></td>
                <td><?php echo $d['foto']; ?></td>
                
                <td>
					<a href="edit.php?nim=<?php echo $d['nim']; ?>">EDIT</a>
					<a href="hapus.php?nim=<?php echo $d['nim']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>



	<br/>
	<a href="logout.php">LOGOUT</a>


</body>
</html>