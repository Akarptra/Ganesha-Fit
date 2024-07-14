<?php

include "../koneksi.php";

if (!empty($_POST['id_pengunjung_pendaftaran'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $jenis_pengunjung = $_POST['value'];
    $tgl_bergabung = $_POST['tgl_bergabung'];
    $masa_berlaku = $_POST['masa_berlaku'];
    $amount = $_POST['amount'];
    $id_pengunjung = $_POST['id_pengunjung_pendaftaran'];

    echo "$jenis_pengunjung";

    $query = "INSERT INTO pengunjung (id_pengunjung, nama_lengkap, no_hp, alamat, nama_jenis_pengunjung, tgl_bergabung, masa_berlaku, biaya)
          VALUES ('$id_pengunjung','$nama_lengkap', '$no_hp', '$alamat', '$jenis_pengunjung', '$tgl_bergabung', '$masa_berlaku', '$amount')";

    if (mysqli_query($conn, $query)) {
        header("Location: ../index.php?page=pendaftaran&status=success");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}else{
    header("Location: ../index.php?page=pendaftaran&status=error");
}

