<?php
require 'common.php';
require 'src/Question.php';
include 'functions.php';

CheckSession($_SESSION['user'], "login.php");
RenderPage("main.php");
?>