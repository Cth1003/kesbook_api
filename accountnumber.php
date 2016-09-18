<?php
$accountnumber = file_get_contents("http://kesbook.cf/users/". $_GET["username"]. "/an.txt");
$convertedarray = array('bool',$accountnumber,"\xc3\xa9");

echo json_encode($convertedarray), "\n";
?>
