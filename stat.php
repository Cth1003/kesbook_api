<?php
$stat = file_get_contents("http://kesbook.cf/users/". $_GET["username"]. "/stat.txt");
if ($stat == "<label class='label label-danger' id='s'> </label>") {
  $sts = "offline";
}
if ($stat == "<label class='label label-default' id='s'> </label>") {
  $sts = "dnd";
}
if ($stat == "<label class='label label-success' id='s'> </label>") {
  $sts = "online";
}
if ($stat == "<label class='label label-warning' id='s'> </label>") {
  $sts = "away";
}
if ($stat == "<label class='label label-info' id='s'> </label>") {
  $sts = "atwork";
}
$convertedarray = array('stat',$sts);
echo json_encode($convertedarray), "\n";
?>
