<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "koneksi.php";

//query untuk membuat tabel kontak 
$sql = "CREATE TABLE login (
email VARCHAR (40) NOT NULL PRIMARY KEY,
password_akun VARCHAR(20))";

//Mengecek apakah terjadi eror ketika pembuatan tabel
if (mysqli_query($conn, $sql)) {
    echo "New Record Succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//Menutup koneksi
mysqli_close($conn);
