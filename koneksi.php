<?php 
	$db = null;
	$config['debug'] = true;
	try{
		$db = new PDO("mysql:host=mysql.idhostinger.com;dbname=u840975585_healt", "u840975585_kun", "kuncorohim95");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		echo $e->getMessage();
	}
?>