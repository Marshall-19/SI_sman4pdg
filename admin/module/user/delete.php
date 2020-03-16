<?php

$id = $_GET['id'];


// $ambil = $koneksi->query("SELECT * FROM admin WHERE id = $id ");
// $pecah = $ambil->fetch_object();

$hapus = $koneksi->query("DELETE FROM user WHERE id = $id ");

if ($hapus) {
    echo "<script>
    alert('Data Terhapus');
    location='index.php?page=module/user/index';
    </script>";
} else {
    echo "<script>
    alert('Data Tidak Terhapus');
    location='index.php?page=module/user/edit';
    </script>";
}
