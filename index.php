<?php
require 'common.php';
include 'functions.php';

CheckSession($_SESSION['user'], "login.php");
RenderPage("main.php");
?>