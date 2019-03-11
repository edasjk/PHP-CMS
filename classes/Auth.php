<?php
/**
* Authentification
*
* Login and logout
*/
class Auth
{
    /**
    * Return the user authentification status
    *
    * @return boolean True is user is logged in, otherwise false
    */
    public static function isLoggedIn()
    {
        return (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']);
    }

    public static function requireLogin()
    {
        if (! static::isLoggedIn()) {

            die("unauthorized");

        }
    }
    /**
    * Logout using session
    *
    * @return void
    */
    public static function login()
    {
      $_SESSION['is_logged_in'] = true;

      Url::redirect('/');
    }

    /**
    * Login using session
    *
    * @return void
    */
    public static function logout()
    {
        session_destroy();

        Url::redirect('/');
    }

}
