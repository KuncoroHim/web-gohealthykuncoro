<?php
if(isset($_COOKIE['userloginadmin']) && $_COOKIE['userloginadmin'] == 'loginadmin'){
?>
<table border="1">
		<tr>
		 	<td>no</td>
			<td>Nama Penyakit</td>
			<td>Info Penyakit</td>
			<td>Pilih Penyakit</td>
			<td>Opsi</td>
		</tr>
			<?php
				$no = 1;
				include "koneksi.php";
				$res = $db->query("select * from tabel_penyakit");
				while ($data = $res->fetch(PDO::FETCH_LAZY)) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['nama_penyakit']; ?></td>
						<td><?php echo $data['info_penyakit']; ?></td>
						<td><?php echo $data['pilih_penyakit']; ?></td>
						<td>
							<button class="edit" id="<?php echo $data['id_penyakit']; ?>">Edit</button>
							<button class="hapus" id="<?php echo $data['id_penyakit']; ?>">Hapus</button>
						</td>
					</tr>
		<?php   } ?>
	</table>
	<?php
} else {
    header("location:loginadmin.php");
}
?>