<?php
$accountnumber = file_get_contents("http://kesbook.cf/users/". $_GET["username"]. "/an.txt");
$convertedarray = array('bool',$accountnumber);

echo json_encode($convertedarray), "\n";
?>
