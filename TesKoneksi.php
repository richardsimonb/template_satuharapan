<?php
$host =”localhost”;
//$username =”satuhara_usernya”;
//$password =”123qwe”;
//$database =”satuhara_14feb2”;
$koneksi = mysql_connect($host,$username,$password);
if($koneksi){
echo ("koneksi sukses");
}
else{
echo ("koneksi gagal");
}
?>