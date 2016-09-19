<?php
$motd = file_get_contents("http://kesbook.cf/users/". $_GET["username"]. "/motd.txt");
$convertedarray = array('motd',$motd);
echo json_encode($convertedarray), "\n";
?>
