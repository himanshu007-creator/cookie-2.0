<?php

// no direct access
defined('_JEXEC') or die;

class plgContentsetcookie extends JPlugin
{
    public function onContentAfterTitle($context, &$article, &$params, $limitstart)
        {
            $cookie_name = "user";
            $cookie_value = "You cant see me - john cena";
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day 
            
            if(!isset($_COOKIE[$cookie_name])) {
                $value = date("Y-m-d H:i:s");
                $name = "datenew";
                setcookie($name, $value, time()+3600*24);
                echo '<script> alert("' .$value. '");</script>';
//                echo "Cookie named '" . $cookie_name . "' is not set!";
            
            } else {
                echo '<script>alert("'. $_COOKIE[$cookie_name].': This Cookie Name is already set");</script>';
//                echo "Value is: " . $_COOKIE[$cookie_name];
            }
        }
}

?>