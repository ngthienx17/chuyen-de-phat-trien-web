<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

if (!empty($_GET['id'])) {
    $token = md5($_SESSION['id']);
    $id = $_GET['id'];
    $userModel->deleteUserById($id); //Delete existing user
}
header('location: list_users.php');
