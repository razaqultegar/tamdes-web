<?php
@session_start();
if (@$_SESSION['admin']) {
require_once('../src/sidebar.php');
require_once('core/init.php');
$result = tampilData();
?>
    <title>Admin Page - TamuDesa</title>

    <main>
      <div class="section"></div>

      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Modal Header</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="modal-footer">
          <a class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
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
            while($row = mysqli_fetch_assoc($result)) :
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
                  <a href="edit.php?id=<?php echo $row['id']; ?>" title="Edit"><i class="material-icons">mode_edit</i></a>
                  <a href="delete_data.php?id=<?php echo $row['id']; ?>" style="color:red;" title="Hapus"><i class="material-icons">delete</i></a>
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
  header("location:/tamdes/login.php");
}
require_once('../src/footer.php');
?>
