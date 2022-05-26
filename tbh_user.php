<?php
   include 'koneksi.php';
   $username=$_POST['username'];
   $password=$_POST['password'];
   $input=mysqli_query($koneksi,"INSERT INTO user VALUES ('$username','$password')") or die(mysql_error());
   if($input){
      echo "data berhasil disimpan";
         header("location:index.php");
   }else{
      echo "gagal disimpan";
   }
?>