

<?php
include '../koneksi.php';

$sql = "SELECT * FROM buku order by judul ";

$res = mysqli_query($koneksi, $sql);

$buku = array();

while ($data = mysqli_fetch_assoc($res)) {
    $buku[] = $data;
}
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title"><i class="fas fa-book"></i>Data Anggota</h2>
            </div>
            <div class="card-body">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">pengarang</th>
                    <th scope="col">stok</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($buku as $p ) { ?>

                    <tr>
                      <th scope="row"><?= $no ?></th>
                      <td><?= $p['judul'] ?></th>
                        <td><?= $p['pengarang']?></th>
                          <td><?= $p['stok']?></th>
                            <td>
                              <a href="#" class="badge badge-primary">detail</a>
                              <a href="#" class="badge badge-secondary">EDIT</a>
                              <a href="#" class="badge badge-success">Hapus</a>
                            </td>
                          </tr>

                          <?php
                          $no++;
                        }
                        ?>
                </tbody>
              </table>
            </div>
            <a class="nav-item nav-link badge badge-info" href="http://localhost/siperpus/buku/tambah.php" align ="right">tambah data buku</a>
          </div>
        </div>
    </div>

</div>
<?php
include '../aset/footer.php';
?>
