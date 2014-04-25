<?php

//By Abhinav Tripathi

require 'current_page.php';
session_destroy();
header('Location: home.php');
?>
