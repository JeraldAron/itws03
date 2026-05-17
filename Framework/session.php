<?php

namespace Framework;

class Session
{
    /** 
     * start a session
     * 
     * @return void
     */
    public static function start(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
    /** 
     * set a session key/value pair
     * 
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function set($key, $value): void
    {
        $_SESSION[$key] = $value;
    }
    /* 
    * get a value by the key
    * @param string $key
    * @return mixed
    *@return void
    */
    public static function get($key, $default = null)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
    }
    /** 
     * Check if session key exists
     * 
     * @param string $key
     * @return bool
     */
    public static function has($key)
    {
        return isset($_SESSION[$key]);
    }
    /** 
     *clear session by key
     * @param string $key
     * @return void
     */
    public static function clear($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }



    /** 
     * clear all sessions 
     * 
     * @return void
     */
    public static function clearAll()
    {
        session_unset();
        session_destroy();
    }

    /** 
     * Set flash message
     * 
     * @param string $key
     * @param string $message
     * @return void
     */
    public static function setFlashMessage($key, $message)
    {
        self::set('flash_' . $key, $message);
    }
    /** 
     * Get flash message
     *
     * @param string $key
     * @param mixed $default
     * @return void
     */
    public static function getFlashMessage($key, $default = null)
    {
        $message = self::get('flash_' . $key, $default);
        self::clear('flash_' . $key);
        return $message;
    }

    /** 
     * 
     */
}
