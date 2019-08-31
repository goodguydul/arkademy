<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/crudark/config/koneksi.php';
if($_POST){
		
	$values = "";
	$myarray = array( $_POST);
	  	foreach ($myarray as $key => $value){
		    foreach ($value as $keyx => $val) {
		    	$values .=  "'".ucwords($val)."',";
		    }
	}	
	try {
		print_r($_FILES);
		$target_dir 	= "photos/";
		$target_file 	= $target_dir . basename($_FILES["foto"]["name"]);
		$uploadOk 		= 1;
		$error_status 	="";
		$imageFileType 	= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["foto"]["tmp_name"]);
		if($check !== false) {
		    $uploadOk = 1;
		} else {
		    $error = "File is not an image.";
		    $uploadOk = 0;
		}
		
		// Check if file already exists
		if (file_exists($target_file)) {
		    $error = "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["foto"]["size"] > 500000) {
		    $error = "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    $error = "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
		       
		    } else {
		        $error = "Sorry, there was an error uploading your file.";
		    }
		}

		$sql = "INSERT INTO `profile`(`nama`, `tmpLahir`, `tgLahir`, `gender`, `goldar`, `alamat`, `rtrw`, `keldes`, `kec`, `agama`, `mariage`, `job`, `nation`, `exp`,`foto`) VALUES (".$values."'".$target_file."')";
		echo $sql;
		if(!$koneksi->query($sql)){
			echo $koneksi->error;
			die();
		}else if($uploadOk == 0) {
			throw new Exception($error_status);
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