<?php 

if (!isset($_SESSION)) session_start();

require_once 'app/init.php';

if (isset($_GET['action'])) 
    require_once 'app/actions/init.php';
else 
    require_once 'app/layout/bootstrap.php';
