<?php
require_once "database.php";

print "Dit is save.php<br>";

var_dump($_POST); print "<br>";

$sql = "INSERT INTO hond SET " .
//" hon_id=" . $_POST["hon_id"] . "," .
    " hon_merk=" . "'" . $_POST["hon_merk"] . "'" . "," .
    " hon_naam=" . "'" . $_POST["hon_naam"] . "'" ;

print $sql . "<br>";

$result = ExecSQL($sql);

var_dump($result); print "<br>";

?>