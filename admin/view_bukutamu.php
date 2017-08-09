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

      <div class="row">
        <form class="col s12">
          <table class="striped responsive-table">
            <tr>
              <td>No. KTP</td>
              <td>Nama Lengkap</td>
              <td>No. Telp/HP</td>
              <td>Alamat Asal</td>
              <td>Alamat Tinggal</td>
              <td>Lama Tinggal</td>
              <td>Keperluan</td>
              <td>Opsi</td>
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
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete_data.php?id=<?php echo $row['noktp']; ?>">Hapus</a>
              </td>
            </tr>
            <?php
            endwhile;
            ?>
          </table>
        </form>
      </div>
    </main>

<?php
require_once('../src/footer.php');
?>
