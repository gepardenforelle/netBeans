<!DOCTYPE html>
<?php
require 'inc/db.php';
require 'class/Users.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $benutzer = new Users();
        $benutzer->readUsers();
        ?>
    </body>
</html>
