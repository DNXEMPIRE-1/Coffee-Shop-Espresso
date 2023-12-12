     <?php
      session_start();
      if(!isset($_SESSION['login_ad']))
      {

        header("location:login_ad.php");
      }
     ?>
     <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="navbar__left" style="padding-right:100vh">
          <a id="index" href="index_ad.php">Admin</a>
          <a id="order" href="order_ad.php">Order List</a>
          <a id="menu" href="menu_ad.php">Menu</a>
          <a id="additem" href="add_menu.php">Add New Item</a>
        </div>
        <div class="navbar__right">
          <a href="#">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
          <a href="#">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
          </a>
          <a id="additem" href="logout_ad.php">Logout</a>
          <a href="#">
            <img width="30" src="assets/avatar.svg" alt="" />
            <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
          </a>
        </div>
      </nav>
