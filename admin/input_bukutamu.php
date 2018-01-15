<?php
require_once('core/init.php');

if (isset($_POST['kirim'])) {
  if(kirimData($_POST['noktp'], $_POST['nama'], $_POST['notelp'], $_POST['asal'], $_POST['tinggal'], $_POST['lama'], $_POST['keper'])){
    header('location: index.php');
  }else {
    echo "Data Gagal Dikirim";
  }
}
require_once('../dist/sidebar.php');
?>
<title>Isi Buku Tamu - TamuDesa</title>

<main>
  <div class="section row">
    <div class="col s12">
    <a class="waves-effect btn" style="background-color: #00b0ff;" href="index.php"><i class="material-icons left">list</i>Lihat Buku Tamu</a>
    <a class="waves-effect btn modal-trigger" style="background-color: #f44336; margin-left: 6px;" href="#bantuan"><i class="material-icons left">help</i>Bantuan</a>
    </div>
  </div>

  <div class="row">
    <form class="col s12" action="" method="post">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">view_comfy</i>
          <input class="validate" type="number" name="noktp">
          <label>No. KTP</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input class="validate" type="text" name="nama">
          <label>Nama Lengkap</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input class="validate" type="tel" name="notelp">
          <label>No. Telp</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">place</i>
          <textarea class="materialize-textarea" name="asal"></textarea>
          <label>Alamat Asal</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">place</i>
          <textarea class="materialize-textarea" name="tinggal"></textarea>
          <label>Alamat Tinggal</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">today</i>
          <input class="validate" type="text" name="lama">
          <label>Lama Tinggal</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea class="materialize-textarea" name="keper"></textarea>
          <label>Keperluan</label>
        </div>
      </div>
      <div class="row col s12">
        <button class="btn waves-effect right" type="submit" name="kirim" style="background-color: #27AE60; margin-left: 6px;">Kirim Data
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>
</main>

<?php
require_once('../dist/footer.php');
?>
