<?php
$boolverifyed = file_get_contents("http://kesbook.cf/users/". $_GET["username"]. "/ver.txt");
$convertedarray = array('bool',$boolverifyed);

echo json_encode($convertedarray), "\n";
?>
