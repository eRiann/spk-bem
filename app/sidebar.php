<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"><?php // echo $_SESSION['nama'] . ' | ' . $_SESSION['level']; ?></a>
        </div>
    </div> -->

    <!-- Sidebar Menu -->
    <?php
    if ($_SESSION['level'] == 'Admin') {
        include('menu/admin.php');
    } else {
        include('menu/staff.php');
    }
    ?>
    <!-- /.sidebar-menu -->
</div>