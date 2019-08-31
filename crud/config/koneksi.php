<?php
$koneksi = new mysqli('localhost', 'root', '','crudark');

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 


$showAllData = "SELECT nama.id as id,nama.name as name, nama.id_work as id_work, nama.id_salary as id_salary, work.name as workname,kategori.salary as salary FROM nama JOIN work ON nama.id_work = work.id JOIN kategori ON nama.id_salary = kategori.id ";

?>