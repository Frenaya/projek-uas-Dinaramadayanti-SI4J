<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalam basisdata.
 require_once "../config/koneksi.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST"){
 //ambil data dari form, simpan dalam variabel
 $iddr=$_POST['iddr']; //yg didalam tanda kutip harus sama dengan name di form
 $nmdr=$_POST['nmdr'];
 $ket=$_POST['ket'];
 $sip=$_POST['sip'];
 $almt=$_POST['almt'];
 $hp=$_POST['hp'];
  
 //buat SQL untuk simpan data
 $sqlsavedokter="INSERT INTO tb_dokter VALUES 
 ('$iddr','$nmdr','$ket','$sip','$almt','$hp')";
 //Proses ke mysql server, menggunakan mysqli_query()
 if(mysqli_query($koneksi,$sqlsavedokter)){
 //redirect ke halaman tampildata.php jika proses simpan berhasil
 echo "<script> alert('Data sudah disimpan');
 window.location.assign('index.php?page=dokter');
 </script>";
 }
 }


 //Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jika ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya.