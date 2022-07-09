<?php
	$conn = mysqli_connect('localhost', 'root', '', 'user-registration') or die($conn);
	$data = mysqli_query($conn,"SELECT * FROM tb_gambar WHERE id_gambar ='".$_GET['id']."'");
	$r = mysqli_fetch_array($data);

	$author = $r['author'];
	$judul = $r['judul'];
	$file = $r['file'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Your Image</title>
</head>
<body>
	<h2>Edit your image here!</h2>

	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Author</td>
				<td>:</td>
				<td><input type="text" name="author" value="<?php echo $author ?>" /></td>
			</tr>

			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input type="text" name="judul" value="<?php echo $judul ?>" /></td>
			</tr>

			<tr>
				<td>Gambar</td>
				<td>:</td>
				<td>
				<input type="hidden" name="img" value="<?php echo $file ?>">
				<input type="file" name="gambar"></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><img src="upload/<?php echo $file ?>" width="100px" height="100px"></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="kirim" value="Update" /></td>
			</tr>
		</table>
	</form>

<?php
	if(isset($_POST['kirim'])){
		$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
		$author = $_POST['author'];
		$judul = $_POST['judul'];
		$nama_file = $_FILES['gambar']['name'];
		$x = explode('.', $nama_file);
		$ekstensi = strtolower(end($x));
		$source = $_FILES['gambar']['tmp_name'];
		$folder = './upload/';

		if($nama_file !=''){
			move_uploaded_file($source, $folder.$nama_file);
			$update = mysqli_query($conn, "UPDATE tb_gambar SET
				author = '".$author."',
				judul = '".$judul."',
				file = '".$nama_file."'
				WHERE id_gambar ='".$_GET['id']."'
				");
			if($update){
				if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
					echo "<script>alert('Update success');window.location.href = 'index.php';</script>";
				}else{
					echo 'Update Failed';
				}
			}else {
				echo 'Update Failed';
			}
		}else{	
			$update = mysqli_query($conn, "UPDATE tb_gambar SET
				author = '".$author."',
				judul = '".$judul."'
				WHERE id_gambar = '".$_GET['id']."'
				");
			if($update){
				echo "<script>alert('Update success');window.location.href = 'index.php';</script>";
			}else{
				echo 'Update Failed';
			}
		}
	}	
	?>

</body>
</html>