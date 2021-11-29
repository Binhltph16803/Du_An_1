<?php
class session
{
    public static function checkSession()
    {
        if (session_id() == '') session_start();
        if (!isset($_SESSION['Login'])) {
        }
    }
    public static function check_login()
    {
        if (session_id() == '') session_start();
        if (isset($_SESSION['Login'])) {
            header('Location:index.php');
        }
    }
    public static function logout()
    {
        if (session_id() == '') session_start();
        if (isset($_SESSION['Login'])) {
            session_destroy();
        }
    }
    public static function access()
    {
        header('Location:./user/index.php');
    }
}
