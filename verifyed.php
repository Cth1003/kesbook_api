<?php
$boolverifyed = file_get_contents("http://kesbook.cf/users/". $_GET["username"]. "/ver.txt");
$convertedarray = array('bool',$boolverifyed,"\xc3\xa9");

echo json_encode($convertedarray), "\n";
?>
