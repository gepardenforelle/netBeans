<?php

class User  {
    var $id;
    var $name;
    var $pass;
    
    function __construct() {
        ;
    }


    function readUsers()    {
        if (mysql_num_rows($result) == 0) {
            echo "Keine Zeilen gefunden, nichts auszugeben, also Ende";
            exit;
        }
    
// Solange eine Zeile mit Daten vorhanden ist, schreibe dies Zeile in $row als
// assoziatives Array
// Hinweis: Wenn sie nur eine Ergebniszeile erwarten, benötigen sie keine Schleife
// Hinweis: Wenn sie extract($row) innerhalb dieser Schleife schreiben,
//          erzeugen sie $userid, $fullname und $userstatus
        while ($row = mysql_fetch_object($result)) {
            echo $row["id"];
            echo $row["name"];
            echo $row["pass"];
        }

        mysql_free_result($result);
    }
}