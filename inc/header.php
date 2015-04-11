<?php
  session_start();
  $date = date('D M d, Y');
  $yesterday = date("D M d, Y", time() - 60 * 60 * 24);
  if ($_POST['email']) {
      $email = $_POST['email'];
      $parts = explode("@", $email);
      $username = $parts[0];
      $_SESSION['username'] = $username;
  }
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Action on Disability and Work UK</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
  <a href="#top" class="skiplink focusable visuallhiddenskip">Skip to Content</a><!-- provides accessibility for screen readers/tab-users who don't want to go through the nav over and over-->
  <nav role="navigation">
    <ul class="navigation">
      <li class="nav-item">
        <a href="edit.php" class="user_photo">
          <img src="./assets/img/gravatar1.png" alt="CindyLou">
          My Profile
          <p class="small">Edit Profile</p>
        </a>
      </li>
      <li class="nav-item"><a href="home.php">Home</a></li>
      <li class="nav-item"><a href="forum.php">Forum</a></li>
      <li class="nav-item"><a href="#">Mentor</a></li>
      <li class="nav-item">
        <a href="messages.php">
          Messages
          <div class="new-notification">
            1
          </div>
        </a>
      </li>
      <li class="nav-item"><a href="accessibility.php">Accessibility</a></li>
      <li class="nav-item"><a href="#">Contact ADWUK</a></li>
      <li class="nav-item"><a href="index.php">Sign Out</a></li>
    </ul>
  </nav>
