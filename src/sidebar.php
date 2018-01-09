<?php require_once('../admin/core/init.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="../vendor/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../vendor/css/icon.css" media="screen,projection"/>
    <!-- SweetAlert -->
    <link type="text/css" rel="stylesheet" href="../src/css/sweetalert.css" media="screen,projection"/>
    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="../src/css/style.css" media="screen,projection"/
  </head>

  <body>
    <!-- Header -->
    <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <center>
          <img class="circle responsive-img z-depth-3" src="../src/img/myAvatar.png" style="width: 70%; margin-top: 5%; margin-bottom: 5%;">
          <h5>Hi, Admin</h5>
        </center><br>
        <li class="bold"><a href="index.php" class="waves-effect"><i class="material-icons">dashboard</i>Beranda</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect"><i class="material-icons">view_list</i>Menu Pengisian</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="input_bukutamu.php">Buku Tamu</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="bold"><a href="setting_admin.php" class="waves-effect"><i class="material-icons">account_circle</i>Profile</a></li>
        <li class="bold"><a href="#!" class="waves-effect"><i class="material-icons">live_help</i>Bantuan</a></li>
        <li class="bold"><a href="../logout.php" class="waves-effect"><i class="material-icons">power_settings_new</i>Logout</a></li>
      </ul>
    </header>

    <!-- Main -->
    <nav><div class="nav-wrapper"></div></nav>
