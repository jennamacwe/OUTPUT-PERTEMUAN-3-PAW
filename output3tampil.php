<?php
    $nama = $_POST["nama"];
    $tgl = $_POST["tgl"];
    $nim = $_POST["nim"];

    echo "nama : ".$nama."<br> tanggal lahir : ".$tgl."<br> NIM : ".$nim.
    "<br> foto diri : <img src='./uploads/gambaraku.jpg' alt='' width='200'>";
    $nama = $_FILES['fileup']['name'];
		$lokasi = $_FILES['fileup']['tmp_name'];
		$namabaru = "gambaraku.jpg";
		move_uploaded_file($lokasi, "uploads/".$namabaru);
?>

