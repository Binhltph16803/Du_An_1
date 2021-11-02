<h3 style="max-width: 400px; margin: 50px auto;">
    <?php
    include_once "../lib/session.php";
    session::checkSession_user();
    ?>
    <?php
    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        session_destroy();
        header('Location:login.php');
    }
    ?>
    <div class="logout">
        <button style=" background-color:red; ">
            <a href="?action=logout">Đăng xuất</a> <br>
        </button>
    </div>
</h3>