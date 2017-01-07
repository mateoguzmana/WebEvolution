<?
$host		="localhost";
$user		="webevolu";
$password	="zxjbvlzb";
$database	="webevolu_system";

$id			=mysql_connect($host,$user, $password);

mysql_query("SET CHARACTER SET utf8 ");
mysql_select_db($database, $id);

?>