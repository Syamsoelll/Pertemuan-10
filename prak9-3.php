<?php  
//Mendefinisikan variabel dengan berbagai macam tipe data 
$nim = "21.11.4664"; 
$nama = "Samsul"; 
$umur = 21; 
$nilai = 100; 
$status = TRUE; 
//Menampilkan data 
echo "NIM : ".$nim."<br>"; 
echo "Nama : $nama <br>"; 
print "Umur : ".$umur."<br>"; 
printf ("Nilai : %.3f<br>",$nilai); 
if($status) 
echo "Status : Aktif"; 
else 
echo "Status : Tidak Aktif"; 
?>