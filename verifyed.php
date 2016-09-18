<?php
$boolverifyed = file_get_contents("http://kesbook.cf/users/". $_GET["username"]. "/ver.txt");
echo "result: ". $boolverifyed;
?>
