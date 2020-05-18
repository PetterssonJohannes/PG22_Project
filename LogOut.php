<?php
session_start();
unset($_SESSION['Id']);
session_destroy();
?>