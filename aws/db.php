<?php
/**
 * Animal Waitch App
 * dp.php
 * @since 2020/06/08
 */

function login($dsn, $db_user, $db_pass, $email, $password) {
    $db = new PDO($dsn, $db_user, $db_pass);
    $r = $db->query("SELECT * FROM users WHERE email = '" . $email . "' AND password = '" . $password . "'");
    $result = $r && $r->fetch();
    return $result;
}
?>