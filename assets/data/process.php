<?php
$f = $_POST['fName'];
$l = $_POST['lName'];
$e = $_POST['email'];
$p = $_POST['pw'];


$d = file_get_contents('user.json');
$d = json_decode($d, true);

$idx = end(array_keys($d));

++$idx;

$a = [
	"fName" => $f,
    "lName" => $l,
    "email" => $e,
	"pw" => $p,
	
];

$d[$idx] = $a;
//print_r($d);

$d = json_encode($d);
file_put_contents('user.json', $d);

$x = $_POST['fName'];
$y = $_POST['sal'];


$dg = file_get_contents('graphdata.json');
$dg = json_decode($dg, true);

$idxg = end(array_keys($dg));
print_r ($idxg);

++$idxg;

$ag = [
	"fName" => $x,
    "sal" => $y,
	
];

$dg[$idxg] = $ag;
//print_r($d);
$dg = json_encode($dg);
file_put_contents('graphdata.json', $dg);


header('location:../../lookup.php');
?>