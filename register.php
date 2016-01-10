<?php 
		include "koneksi.php";
		$nama = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$no_telp = $_POST['no_telp'];
		$norek = $_POST['norek'];
		$alamat = $_POST['alamat'];
		if($nama == "" || $email == "" || $password == "" || $no_telp == "" || $norek == "" || $alamat == "" ){
			echo "Isi dengan lengkap...!!!";
        	?>
        		<form action="registrasi.php" method="post">
            		<button type="submit" name="submit">Back</button>
        		</form>
        	<?php
		} else if(!is_numeric($no_telp)){
			echo "Isi no telpon dengan benar...!!!";
        	?>
        		<form action="registrasi.php" method="post">
            		<button type="submit" name="submit">Back</button>
        		</form>
        	<?php
		} else if (!is_numeric($norek)) {
			echo "Isi no rekening dengan benar...!!!";
        	?>
        		<form action="registrasi.php" method="post">
            		<button type="submit" name="submit">Back</button>
        		</form>
        	<?php
		} else {
			$reg = $db->prepare('INSERT INTO tabel_member VALUES (NULL,?,?,?,?,?,?)');
			$reg->execute(array($email,$password,$nama,$no_telp,$alamat,$norek));
			echo "Sukses silahkan Klik OK lalu LOGIN";
        	?>
        		<form action="loginmember.php" method="post">
            		<button type="submit" name="submit">OK</button>
        		</form>
        	<?php
		}


?>