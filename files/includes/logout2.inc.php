<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="../admin_login.php">Go back</a>';