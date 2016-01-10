<?php
if(isset($_COOKIE['userloginadmin']) && $_COOKIE['userloginadmin'] == 'loginadmin'){
?>
<?php 
	include "koneksi.php";
	$namapenyakit = @$_POST['namapenyakit'];
	$infopenyakit = @$_POST['infopenyakit'];
	$pilihpenyakit = @$_POST['pilihpenyakit'];
	$idpenyakit = @$_POST['idpenyakit'];

	if(@$_GET['page'] == 'tambah'){
		$cek = $db->query("SELECT * FROM tabel_penyakit WHERE nama_penyakit = '".$namapenyakit."'");
		if($cek->rowCount() < 1){
			$tambah = $db->prepare("insert into tabel_penyakit values (NULL,?,?,?)");
			$tambah->execute(array($namapenyakit,$infopenyakit,$pilihpenyakit));
			if($tambah->rowCount() > 0){
				echo "sukses";
			}	
		} else {
			echo "sudah";
		}
	} else if(@$_GET['page'] == 'edit'){
		$edit = $db->prepare("UPDATE tabel_penyakit SET nama_penyakit = ?, info_penyakit = ?, pilih_penyakit = ? WHERE id_penyakit = ?");
		$edit->execute(array($namapenyakit,$infopenyakit,$pilihpenyakit,$idpenyakit));
		if($edit->rowCount() > 0){
			echo "sukses";
		}
	} else if(@$_GET['page'] == 'hapus'){
		$del = $db->prepare("DELETE FROM tabel_penyakit WHERE id_penyakit = :id");
		$del->bindParam(":id",$idpenyakit);
		$del->execute();
		if($del->rowCount() > 0){
			echo "sukses";
		}
	}
?>
<?php
} else {
    header("location:loginadmin.php");
}
?>