<?php
// Pengaturan Database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "fathur_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$nama  = $_POST['nama'];
$pesan = $_POST['pesan'];

// Simpan ke database
$sql = "INSERT INTO pesan_kontak (nama, isi_pesan) VALUES ('$nama', '$pesan')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Pesan berhasil tersimpan di database!'); window.location='contact.html';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>