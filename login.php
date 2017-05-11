<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles/styles.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/
font-awesome.min.css">
<?php
include('database.php');
if (isset($_POST['username']) and isset($_POST['password'])) {
 $name = $mysqli->real_escape_string($_POST['username']);
 $pwd = $mysqli->real_escape_string($_POST['password']);
 $query = <<<END
SELECT username, password, id FROM smartusers
 WHERE username = '{$name}'
 AND password = '{$pwd}'
END;
 $result = $mysqli->query($query);
 if ($result->num_rows > 0) {
 $row = $result->fetch_object();
 $_SESSION["username"] = $row->username;
 $_SESSION["userId"] = $row->id;
 header("Location:template.php");
 } else {
 echo "Wrong username or password. Try again";
 }
}
$content = <<<END
<br><br><br>
<form action="login.php" method="post">
<input type="text" name="username" placeholder="username">
<input type="password" name="password" placeholder="password">
<input type="submit" value="Login">
</form>
END;
echo $newnavigation;
echo $content;
?>
</html>