<?php
$host = "localhost";
$user = "johnie16";
$pwd = "5QMc_D8v9C";
$db = "johnie16_db";
$mysqli = new mysqli($host, $user, $pwd, $db);
if (isset($_POST['username']) and isset($_POST['password'])) {
$query = <<<END
INSERT INTO users(username,password,email,fname,lname)
VALUES('{$_POST['username']}','{$_POST['password']}','
{$_POST['email']}','{$_POST['fname']}','{$_POST['lname']}')
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
<input type="text" name="email" placeholder="email"><br>
<input type="text" name="fname" placeholder="first name"><br>
<input type="text" name="lname" placeholder="last name"><br>
<input type="submit" value="Register">
<input type="Reset" value="reset">
</form>
END;
echo $content;
?>