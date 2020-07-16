<?php
/**
 * Animal Waitch App
 * dp.php
 * @since 2020/07/16
 */

function login($dsn, $db_user, $db_pass, $email, $password) {
    $db = new PDO($dsn, $db_user, $db_pass);
    if(preg_match('/=|substr\(/i', $password)) exit("You can't hack!"); 
    $r = $db->query("SELECT * FROM users WHERE email = '" . $email . "' AND password = '" . $password . "'");
    $result = $r && $r->fetch();
    return $result;
}
?>