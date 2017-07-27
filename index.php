<?php
@session_start();
if (@$_SESSION['admin']) {
require_once('src/sidebar.php');
?>

<main>
  <div class="container">
    <div class="section">
      <div class="row">
        <h3 class="col s12 light center header">Materialize simplifies life for developers and the users they serve.</h3>
      </div>

      <!--   Promo Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="center promo">
            <i class="material-icons">flash_on</i>
            <p class="promo-caption">Speeds up development</p>
            <p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="center promo">
            <i class="material-icons">group</i>
            <p class="promo-caption">User Experience Focused</p>
            <p class="light center">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="center promo">
            <i class="material-icons">settings</i>
            <p class="promo-caption">Easy to work with</p>
            <p class="light center">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
}else {
  header("location:/tamdes/login.php");
}
require_once('src/footer.php');
?>
