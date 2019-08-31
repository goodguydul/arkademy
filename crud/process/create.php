<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/arkademy/crud/config/koneksi.php';
if($_POST){
	$values = "";
	$myarray = array( $_POST);
	  	foreach ($myarray as $key => $value){
		    foreach ($value as $keyx => $val) {
		    	$values .=  "'".ucwords($val)."',";
		    }
	}	
	try {
		$sql = "INSERT INTO `nama`(`name`, `id_work`, `id_salary`) VALUES (".rtrim($values,',').")";
		
		if(!$koneksi->query($sql)){
			echo $koneksi->error;
			die();
		}else{
			echo "DATA SUKSES DISIMPAN!";
		}

	} catch (Exception $e) {
		echo $e;
		die();
	}
}
mysqli_close($koneksi);
?>