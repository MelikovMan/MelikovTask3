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
$name = $_POST['field-name-1'];
$email = $_POST['field-email'];
$birth = $_POST['field-date'];
$sex = $_POST['radio-group-1'];
$limbs = intval(substr($_POST['radio-group-2'],-1));
$superpowers = $_POST['field-name-4'];
$bio= $_POST['bio-field'];
$user = 'u47551';
$pass = '4166807';
$db = new PDO('mysql:host=localhost;dbname=test', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
try {
  $stmt = $db->prepare("INSERT INTO contracts VALUES(1,:name,:email,:birthdate,:sex,:limbs,:bio)");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':birthdate', $birth);
  $stmt->bindParam(':sex', $sex);
  $stmt->bindParam(':limbs', $limb);
  $stmt->bindParam(':bio', $bio);
  $stmt->execute();
} 
catch(PDOException $e){
  print('Error : ' . $e->getMessage());
  exit();
}
print_r("Succesfully added new stuff, probably...");
?>
