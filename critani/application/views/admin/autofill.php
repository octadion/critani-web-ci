<?php
include 'koneksi.php';
$nama_guru = $_GET['nama_mitra'];
$query = mysqli_query($koneksi, "select nama_cerita from guru where nama_mitra='$nama_mitra'");
$cerita = mysqli_fetch_array($query);
$data = array(
    'nama_cerita' => $cerita['nama_cerita']);
echo json_encode($data);