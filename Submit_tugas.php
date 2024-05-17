<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $file = $_FILES['tugas'];

    // Menyimpan file yang diunggah ke folder "uploads"
    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $upload_file)) {
        echo "Tugas berhasil diunggah.";
    } else {
        echo "Terjadi kesalahan saat mengunggah tugas.";
    }

    // Menyimpan informasi ke file log atau database bisa dilakukan di sini
}
?>
