<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
  $judul = $_POST['judul'];
  $penerbit = $_POST['penerbit'];
  $pengarang = $_POST['pengarang'];
  $ringkasan = $_POST['ringkasan'];
  $cover = $_POST['cover'];
  $stok = $_POST['stok'];
  $id_kategori = 1;
  $sql = "INSERT INTO buku (judul, penerbit, pengarang, ringkasan, cover, stok, id_kategori)
            VALUES ('  $judul', '$penerbit', '$pengarang', '$ringkasan', '  $cover', '$stok',$id_kategori)";

            $res = mysqli_query($koneksi, $sql);

            $count = mysqli_affected_rows($koneksi);

            if($count == 1)
            {
              header("Location: index.php");
            }
            else
            {
              header("Location: tambah.php");
            }


          }
          else
          {
            header("Location: tambah.php");
          }

?>
