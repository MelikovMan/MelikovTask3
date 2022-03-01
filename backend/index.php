<?php
header('Content-Type: text/html; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
	print_r('Does not accept non POST methods');
}
$errors = FALSE;
if(empty($_POST['field-name-1']) || !isset($_POST['field-name-4']) || empty($_POST['field-email']) || empty($_POST['field-date']) || empty($_POST['bio-field'])){
	print_r('Empty fields!');
	exit();
}
print_r("Non null data... /n");
print_r($_POST."/n");
$superpowers = $_POST['field-name-4'];
foreach ($superpowers as $val){
	print_r($val);
}
exit();
