<?php
error_reporting(E_ALL);
echo date("H:i:s");
$db = new mysqli('localhost','root','', 'database');
error_reporting(E_ALL);

$erg = $db->query("SELECT id, name, pass FROM user");
//print_r($erg);

if ($erg->num_rows) {
    echo '<p>Daten vorhanden: Anzahl: ';
    echo $erg->num_rows;
}
$datensatz = $erg->fetch_assoc();
echo '<pre>';
print_r($datensatz);
echo '</pre>';

?>

