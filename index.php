<?php
// we connect to localhost and socket e.g. /tmp/mysql.sock

// variant 2: with localhost
$link = mysql_connect('localhost:/tmp/mysql/danita.sock', 'darleen', 'BqKz0yVP');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

mysql_close($link);
?>
