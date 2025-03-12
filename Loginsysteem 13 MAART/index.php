<?php
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
echo "Welkom! <a href='logout.php'>Uitloggen</a>";
?>
