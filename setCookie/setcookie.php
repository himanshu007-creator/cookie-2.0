<?php

// no direct access
defined('_JEXEC') or die;

class plgContentsetcookie extends JPlugin
{
    public function onContentAfterTitle($context, &$article, &$params, $limitstart)
        {
                $cookie_name = "user";
                $cookie_value = "YOU can't see me -john cena";
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day 
                
                if(!isset($_COOKIE[$cookie_name])) {
                    $cookie_names = date("Y-m-d H:i:s");
                    $cookie_values = date("Y-m-d H:i:s");
                    setcookie($cookie_names, $cookie_values);
                  echo '<script>alert("Cookie named ' . $_COOKIE[$cookie_names]. ' is not set!");</script>';
                } else {
                  echo '<script>alert("Cookie ' . $cookie_name . ' is set!");</script>';
                  echo '<script>alert("Value is:' . $_COOKIE[$cookie_name].'");</script>';
                }
                
        }
}

?>