<?php

require_once('pdo.php');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$response = array('message' => $name . 'sent a message');

echo json_encode($response);
