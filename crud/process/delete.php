<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/arkademy/crud/config/koneksi.php';
try {
	$pid = $_REQUEST['delete'];
	$sql = "DELETE FROM nama WHERE id=$pid";
	$koneksi->query($sql);
} catch (Exception $e) {
	echo $e;
	die();
}
?>