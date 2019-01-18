<?php
$x = $_POST['fName'];
$y = $_POST['sal'];


$d = file_get_contents('graphdata.json');
$d = json_decode($d, true);

$idx = end(array_keys($d));
print_r ($idx);

++$idx;

$a = [
	"fName" => $x,
    "sal" => $y,
	
];

$d[$idx] = $a;
//print_r($d);
$d = json_encode($d);
file_put_contents('graphdata.json', $d);

header('location:../../lookup.php');
?>