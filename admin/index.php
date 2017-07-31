<?php
@session_start();
if (@$_SESSION['admin']) {
require_once('../src/sidebar.php');
?>
    <title>Home - TamuDesa</title>

    <main>
      <div class="section">
        <div class="row">
          <div class="col s12">
            <div class="box-menu biru waves-effect center" style="padding-top: 25px;">
              <span class="bold" style="font-size: 78px; line-height: 84px; font-weight: 800;">90</span>
              <h4 style="font-size: 20px; line-height: 22px; font-weight: 400;">Jumlah Tamu</h4>
            </div>
            <div class="box-menu biru waves-effect center" style="padding-top: 25px; margin-left: 6px;">
              <span class="bold" style="font-size: 78px; line-height: 84px; font-weight: 800;">90</span>
              <h4 style="font-size: 20px; line-height: 22px; font-weight: 400;">Jumlah Tamu</h4>
            </div>
            <div class="box-menu biru waves-effect center" style="padding-top: 25px; margin-left: 6px;">
              <span class="bold" style="font-size: 78px; line-height: 84px; font-weight: 800;">90</span>
              <h4 style="font-size: 20px; line-height: 22px; font-weight: 400;">Jumlah Tamu</h4>
            </div>
            <div class="box-menu biru waves-effect center" style="padding-top: 25px; margin-left: 6px;">
              <span class="bold" style="font-size: 78px; line-height: 84px; font-weight: 800;">90</span>
              <h4 style="font-size: 20px; line-height: 22px; font-weight: 400;">Jumlah Tamu</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <h5 class="light header" style="color: black;">Menu Pengisian</h5>
            <div class="divider"></div>
            <div class="section">
              <a href="input_bukutamu.php">
                <div class="box-menu waves-effect center" style="padding-top: 25px;">
                  <i class="bold large material-icons" style="font-size: 90px;">add_circle</i>
                  <h4 style="margin-top: -10px;">Buku Tamu</h4>
                </div>
              </a>
            </div>
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
