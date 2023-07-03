<?php 
define("DB_HOST", "localhost");
define("DB_NAME","web_clothes");
define("DB_USER","huan");
define("DB_PASS","123456");




$public_end = strpos($_SERVER['SCRIPT_NAME'], "/frontend") + 12 ;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
// echo $public_end;
// echo $doc_root;

define("WWW_ROOT", $doc_root);


?>