<?php
include '../aset/header.php';
?>

<div class="container">
   <div class="row mt-4">
       <div class="col-md-9">
           <div class="card">
               <div class="card-header">
                 <h2>Tambah Data Buku</h2>
               </div>
               <div class="card-body">
                 <form method="post" action="tambah-buku.php">
                     <div class="form-group">
                         <label for="judul">Judul</label>
                         <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="penerbit">penerbit</label>
                         <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukkan nama penerbit" autocomplete="off">
                         <small class="form-text text-muted">Contoh: pastel books</small>
                     </div>
                     <div class="form-group">
                         <label for="pengarang">pengarang</label>
                         <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Masukkan nama pengarang" autocomplete="off">
                         <small class="form-text text-muted">Contoh: pidi baiq</small>
                     </div>
                     <div class="form-group">
                         <label for="ringkasan">ringkasan</label>
                         <input type="text" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan ringkasan buku" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="cover">cover</label>
                         <input type="text" class="form-control" name="cover" id="cover" placeholder="Masukkan cover buku" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="stok">stok</label>
                         <input type="text" class="form-control" name="stok" id="stok" placeholder="Masukkan stok buku" autocomplete="off">
                     </div>

                     <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                 </form>

               </div>
           </div>
       </div>
   </div>
</div>

<?php
include '../aset/footer.php';
?>
