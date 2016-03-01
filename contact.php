<?php

require 'functions.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $comments = trim($_POST['comments']);

  if ( empty($name) || empty($email) || empty($comments) || !valid_mail($email)) {
    $status = "Please provide name comments and a valid email";
  }else {
    add_registered_user($name, $email, $comments);
    $status = 'Thank you for your interest!';
  }

}

require 'send_form_email.php';


