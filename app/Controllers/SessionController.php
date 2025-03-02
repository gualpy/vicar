<?php

namespace App\Controllers;

class SessionController
{
    public function __construct()
    {
        // Constructor code here
    }

    public function startSession()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function destroySession()
    {
        if (session_status() == PHP_SESSION_ACTIVE) {
            session_destroy();
        }
    }

    public function setSessionData($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function getSessionData($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public function unsetSessionData($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }
}
?>