<?php
@session_start();
if (@$_SESSION['admin']) {
require_once('../src/sidebar.php');
$link = mysqli_connect("localhost", "root", "", "db_tamdes") or die(mysqli_error($link));

$limit = 10;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $limit;

$sql = mysqli_query($link, "SELECT * FROM tb_buku LIMIT $start_from, $limit");

$Hasil = mysqli_query($link, "SELECT * FROM tb_buku");
$total = mysqli_num_rows($Hasil);

$pages = ceil($total/$limit);
?>
    <title>Admin Page - TamuDesa</title>

    <main>
      <div class="section right" style="margin-right: 10px;">
        <div class="col s12">
          <form action="search.php" method="post">
            <input id="search-box" name="cari" size="40" type="text" placeholder="Masukkan No. KTP"/>
            <input id="search-btn" value="Cari Tamu" type="submit"/>
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
            while($row = mysqli_fetch_assoc($sql)) :
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
      <div class="row">
        <div class="col s12">
        <div class="pagination">
            <?php for ($i=1; $i <=$pages; $i++) { ?>
              <a href="?page=<?php echo $i; ?>" title="Halaman"><?php echo $i; ?></a>
            <?php } ?>
          </div>
        </div>
      </div>
    </main>

<?php
}else {
  header("location:/tamdes/login.php");
}
require_once('../src/footer.php');
?>
