<?php
/**
 * 東方 Wiki
 * dp.php
 * @since 2020/06/12
 */

function search($dsn, $db_user, $db_pass, $filter) {
    $db = new PDO($dsn, $db_user, $db_pass);
    
    if ($filter !== '') {
      if(strpos($filter,' ') !== false){
        exit("You can't use space!");
      }
      $filter = str_replace(array("UNION","union"), "", $filter);
      if(preg_match('/and|\(|\)|\=/i', $filter)) exit("You can't hack!");
      $r = $db->query("SELECT * FROM touhou WHERE title LIKE '".'%'. $filter .'%'."'");
    } else {
      $r = $db->query("SELECT * FROM touhou");
    }

    return $r;
}
?>