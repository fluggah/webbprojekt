<?php
$host = "localhost";
$user = "johnie16";
$pwd = "5QMc_D8v9C";
$db = "johnie16_db";
$mysqli = new mysqli($host, $user, $pwd, $db);
if (isset($_POST['username']) and isset($_POST['password'])) {
$query = <<<END
INSERT INTO smartusers(username,password)
VALUES('{$_POST['username']}','{$_POST['password']}')
END;
if ($mysqli->query($query) !== TRUE) {
die("Could not query database" . $mysqli->errno . " : " . $mysqli->error);
header('Location:index.php');
}
}
$content = <<<END
<form method="post" action="registerSH.php">
<input type = "text" name="username" placeholder="username" ><br>
<input type="password" name="password" placeholder="password"><br>
<input type="submit" value="Register">
<input type="Reset" value="reset">
</form>
END;
echo $content;
?>