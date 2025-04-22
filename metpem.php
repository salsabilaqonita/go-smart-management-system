<?php
require "connect.php";

function tambah($_data){
    global $conn;

    $nama = htmlspecialchars($_data['nama']);
    $HP = htmlspecialchars($_data['HP']);
    $paket = htmlspecialchars($_data['tipe']);
    $catatan = htmlspecialchars($_data['catatan']);
    $pembayaran = htmlspecialchars($_data['paymentMethod']);
    //$bukti = $_data['gambar'];

    //$bukti = upload();
    //if(!$bukti){
       // return false;
    //} 

    $query = "INSERT INTO pembayaran VALUES('','$nama', '$HP', '$paket', '$catatan', '$pembayaran')";
    mysqli_query($conn, $query); 
    
    return mysqli_affected_rows($conn);
};

function upload(){
    // var_dump($_FILES);die;

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah ada gambar yang di upload
    if($error === 4){
        echo "
        <script>
        alert('silahkan pilih gambar terlebih dahulu');
        </script>;
        ";
        return false;
    };
}


    // bug fixed, ganti spasi menjadi -
    //$namaFile = str_replace(' ', '-', $namaFile);

    // memindahkan gambar ke folder yang kita pilih
    //move_uploaded_file($tmpName, 'Database/img' . $namaFile);
    //return $namaFile;


?>