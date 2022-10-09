<!-- Bottom Nav - Show on Mobile Only -->
<nav class="d-lg-none navbar-nav-scroll fixed-bottom shadow-gg">
  <div class="bottom_nav_container">
    <a href="../" class="bottom_nav_item <?= (basename(dirname($_SERVER['PHP_SELF'])) == "home") ? " active" : ""; ?>">
      <span class="material-icons-outlined bottom_nav_icon">dashboard</span>
      <p class="bottom_nav_title">Trang Chủ</p>
    </a>

    <a href="../payment-list" class="bottom_nav_item <?= (basename(dirname($_SERVER['PHP_SELF'])) == "payment") ? " active" : ""; ?>">
      <span class="material-icons bottom_nav_icon">payments</span>
      <p class="bottom_nav_title">Lịch thanh toán</p>
    </a>

    <a href="../abandon-cart" class="bottom_nav_item <?= (basename(dirname($_SERVER['PHP_SELF'])) == "cart") ? " active" : ""; ?>">
      <span class="material-icons bottom_nav_icon">shopping_cart</span>
      <p class="bottom_nav_title">Giỏ hàng</p>
    </a>

    <a href="../account" class="bottom_nav_item <?= (basename(dirname($_SERVER['PHP_SELF'])) == "account") ? " active" : ""; ?>">
      <span class="material-icons bottom_nav_icon">account_circle</span>
      <p class="bottom_nav_title">Tài Khoản</p>
    </a>
  </div>
</nav>