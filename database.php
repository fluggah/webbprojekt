<?php
session_name('Website');
session_start();
$host = "localhost";
$user = "johnie16";
$pwd = "5QMc_D8v9C";
$db = "johnie16_db";
$mysqli = new mysqli($host, $user, $pwd, $db);
$navigation = <<<END
<nav>
<a href="index.php">Home</a>
<a href="about.php">About</a>
END;
if (isset($_SESSION['userId']))
{
$navigation .= <<<END
<a href="logout.php">Logout</a>
Logged in as {$_SESSION['username']}
END;
}
$navigation .= '</nav>';
?>