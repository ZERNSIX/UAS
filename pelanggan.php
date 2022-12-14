<?php
    print_r($_POST);
    if(isset($_POST['submit'])){
        echo "TEST";
        include("include.php");
        
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $paket = $_POST['paket'];
        $jumlah = $_POST['jumlah'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];

        $query = "INSERT INTO pesan(nama_pelanggan,email_pelanggan,jumlah,nama_penginapan,tgl_checkin,tgl_checkout) 
        VALUES ('$nama', '$email','$jumlah','$paket','$checkin','$checkout')";
        $stmt = $db->prepare($query);
        $stmt->execute();
        header("Location:index.php");
    }
?>