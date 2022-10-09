<?php
include('../lib/session.php');

if (isset($_SESSION['dsu_ad_phone'])) {
  header('Location: ../dashboard');
} else {
  include('../lib/header.php');
?>

  <body class="bg-main-dim">
    <!-- Form Login -->
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4 p-3 pt-4">
          <!-- <div class="skew-background-300"></div> -->

          <!-- Logo -->
          <div class="p-3 mb-5 text-center">
            <a href="../">
              <img src="../img/logo-white.svg" width="100%" style="margin-bottom: 10px;" class="my-2">
            </a>
          </div>

          <!-- Form -->
          <div class="shadow-gg bg-main shadow-theme rounded-20">
            <form action="./do.php" method="post" class="p-3">
              <div class="d-grid gap-2">
                <input type="hidden" name="action" value="login">

                <div class="form-group mb-3">
                  <label class="text-sub mb-1" for="phone">Phone</label>
                  <input type="tel" name="phone" class="form-control" id="adphone" maxlength="10" minlength="10" placeholder="" value="<?= (isset($_COOKIE['xnad_phone'])) ? $_COOKIE['xnad_phone'] : ""; ?>">
                </div>

                <div class="form-group mb-3">
                  <label class="text-sub mb-1" for="phone">Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-gra btn-block">Next</button>

                <?php
                if (isset($_GET['alert']) && $_GET['alert'] == 'wrongpass') {
                ?>
                  <div class="text-center">
                    <p style="color: red">Wrong pass or phone!</p>
                  </div>
                <?php
                }
                ?>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>
<?php } ?>