<?php

class Logout
{
    public function logout()
    {
        session_start();
        session_destroy();
        header("location: ../view/login.php");
    }
}
$logout = new Logout;
$logout->logout();