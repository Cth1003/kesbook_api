<?php
$kesbookavitar = file_get_contents("http://kesbook.cf/users/". $_GET["username"]. "/ai.txt");
$convertedarray = array('avitar',$kesbookavitar,"\xc3\xa9");

echo json_encode($convertedarray), "\n";
?>
