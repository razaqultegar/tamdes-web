<?php
require_once('../src/sidebar.php');
//connect
require_once('core/init.php');
$result = tampilData();
?>
    <title>Lihat Buku Tamu - TamuDesa</title>

    <main>
      <div class="section row">
        <div class="col s12">
        <a class="waves-effect btn" style="background-color: #00b0ff;"><i class="material-icons left">list</i>Lihat Buku Tamu</a>
        <a class="waves-effect btn modal-trigger" style="background-color: #f44336; margin-left: 6px;" href="#modal1"><i class="material-icons left">help</i>Bantuan</a>
        </div>
      </div>

      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Modal Header</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
        </div>
      </div>

      <div class="row">
        <form class="col s12">
          <table class="highlight responsive-table">
            <tr>
              <td><strong>No. KTP</strong></td>
                <td><strong>Nama Lengkap</strong></td>
                <td><strong>No. Telp/HP</strong></td>
                <td><strong>Alamat Asal</strong></td>
                <td><strong>Alamat Tinggal</strong></td>
                <td><strong>Lama Tinggal</strong></td>
                <td><strong>Keperluan</strong></td>
                <td><strong>Opsi</strong></td>
            </tr>

            <?php
            while($row = mysqli_fetch_assoc($result)) :
            ?>

            <tr>
              <td><?= $row['noktp']; ?></td>
              <td><?= $row['nama']; ?></td>
              <td><?= $row['notelp']; ?></td>
              <td><?= $row['asal']; ?></td>
              <td><?= $row['tinggal']; ?></td>
              <td><?= $row['lama']; ?></td>
              <td><?= $row['keper']; ?></td>
              <td class="center">
                <a href="delete_data.php?id=<?php echo $row['id']; ?>"><i class="material-icons small" style="color: #e53935;">delete</i></a>
                <a href="edit.php?id=<?php echo $row['id']; ?>"><i class="material-icons small">mode_edit</i></a>
              </td>
            </tr>
            <?php
            endwhile;
            ?>
          </table>
        </form>
      </div>

      <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul>
    </main>

<?php
require_once('../src/footer.php');
?>
