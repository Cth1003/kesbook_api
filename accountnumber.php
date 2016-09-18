<?php
$accountnumber = file_get_contents("http://kesbook.cf/users/". $_GET["username"]. "/an.txt");
echo '{"result":'$accountnumber'"}';
?>
