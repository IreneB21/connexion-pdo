<?php
require_once '_connec.php';

$pdo = new PDO(DSN, USER, PASS);

$data = array_map('htmlentities', array_map('trim', $_POST));
$firstname = $data['firstname']; 
$lastname = $data['lastname'];

$query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';
$statement = $pdo->prepare($query);
$statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
$statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
$statement->execute();

header('Location: index.php');
?>