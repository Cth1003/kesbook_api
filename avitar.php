<?php
$kesbookavitar = file_get_contents("http://kesbook.cf/users/". $_GET["username"]. "/ai.txt");
echo '{"avitar":'$kesbookavitar'"}';
?>
