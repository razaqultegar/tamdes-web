<?php
require_once('../src/sidebar.php');
//connect
require_once('core/init.php');
?>
    <title>Isi Buku Tamu - TamuDesa</title>

    <main>
      <div class="section row">
        <div class="col s12">
        <a class="waves-effect btn" style="background-color: #00b0ff;"><i class="material-icons left">list</i>Lihat Buku Tamu</a>
        <a class="waves-effect btn" style="background-color: #f44336; margin-left: 6px;"><i class="material-icons left">help</i>Bantuan</a>
        </div>
      </div>

      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">view_comfy</i>
              <input id="ktp" type="number" class="validate">
              <label for="ktp">No. KTP</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="nama" type="text" class="validate">
              <label for="nama">Nama Lengkap</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">phone</i>
              <input id="notelp" type="tel" class="validate">
              <label for="notelp">No. Telp</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">place</i>
              <textarea id="asal" class="materialize-textarea"></textarea>
              <label for="asal">Alamat Asal</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">place</i>
              <textarea id="tinggal" class="materialize-textarea"></textarea>
              <label for="tinggal">Alamat Tinggal</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">today</i>
              <input id="lama" type="text" class="validate">
              <label for="lama">Lama Tinggal</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="keperluan" class="materialize-textarea"></textarea>
              <label for="keperluan">Keperluan</label>
            </div>
          </div>
          <div class="row col s12">
            <button class="btn waves-effect right" type="submit" name="action" style="background-color: #27AE60; margin-left: 6px;">Kirim Data
              <i class="material-icons right">send</i>
            </button>
          </div>
        </form>
      </div>
    </main>

<?php
require_once('../src/footer.php');
?>
