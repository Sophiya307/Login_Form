<?php
session_start();

if (!isset($_SESSION['user_details'])) {
    header("Location: ../view/loginView.php?message=Please login to update your profile");
    exit();
}
$userId = $_SESSION['user_details']['user_id'];
$newProfileData = array(
    'firstName' => $_POST['firstName'],
    'lastName' => $_POST['lastName'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],  
    'gender' => $_POST['gender'],
    'hobbies' => $_POST['hobbies'],
    'department' => $_POST['department'],
);
$_SESSION['user_details'] = array_merge($_SESSION['user_details'], $newProfileData);
header("Location: ../view/update_profile.php?message=Profile updated successfully");
exit();
?>
