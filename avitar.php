<?php
$kesbookavitar = file_get_contents("http://kesbook.cf/users/". $_GET["username"]. "/ai.txt");
$convertedarray = array('avitar',$kesbookavitar);

echo json_encode($convertedarray), "\n";
?>
