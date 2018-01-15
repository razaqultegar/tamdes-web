<?php
@session_start();
if (@$_SESSION['admin']) {
require_once('core/init.php');
require_once('../dist/sidebar.php');

$result = tampilData();
$result = search();
?>
    <title>Dasbor Admin - TamuDesa</title>

    <main>
      <div class="section right" style="margin-right: 10px;">
        <div class="col s12">
          <form action="" method="post">
            <input id="search-box" name="input_cari" size="40" type="text" placeholder="Masukkan No. KTP"/>
            <input id="search-btn" name="cari_data" value="Cari Tamu" type="submit"/>
          </form>
        </div>
      </div>

      <div class="row">
        <form class="col s12">
          <table class="responsive-table">
            <thead>
              <tr>
                  <th>No. KTP</th>
                  <th>Nama Lengkap</th>
                  <th>No. Telp</th>
                  <th>Alamat Asal</th>
                  <th>Alamat Tinggal</th>
                  <th>Lama Tinggal</th>
                  <th>Keperluan</th>
                  <th>Opsi</th>
              </tr>
            </thead>

            <?php
              while($row = mysqli_fetch_assoc($result)):
            ?>
            
            <tbody>
              <tr>
                <td><?= $row['noktp']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['notelp']; ?></td>
                <td><?= $row['asal']; ?></td>
                <td><?= $row['tinggal']; ?></td>
                <td><?= $row['lama']; ?></td>
                <td><?= $row['keper']; ?></td>
                <td>
                  <a href="edit_bukutamu.php?id=<?php echo $row['id']; ?>" title="Edit"><i class="material-icons">mode_edit</i></a>
                  <a href="delete_bukutamu.php?id=<?php echo $row['id']; ?>" style="color:red;" title="Hapus"><i class="material-icons">delete</i></a>
                </td>
              </tr>
            </tbody>
            <?php
          endwhile;
            ?>
          </table>
        </form>
      </div>
    </main>

<?php
}else {
  header("location:/baru/index.php");
}
require_once('../dist/footer.php');
?>
