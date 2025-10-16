<?php

namespace App;

class SessionAuth
{
    public static function start(): void
    {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function login(string $usuari)
    {
        $_SESSION['usuari'] = $usuari;
    }

    public static function logout()
    {
        session_unset();
        session_destroy();
    }

    public static function isAuthenticated()
    {
        return isset($_SESSION['usuari']);
    }

    public static function getUser()
    {
        return $_SESSION['usuari'] ?? null;
    }
}
