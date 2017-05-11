<?php
include_once('database.php');
if (isset($_POST['name'])) {
$query = <<<END
INSERT INTO shdevices(device,type,location,value)
VALUES('{$_POST['device']}','{$_POST['type']}','{$_POST['location']}')
END;
$mysqli->query($query);
echo 'Product added to the database!';
}
$content = <<<END
<h1>Add device</h1>
<form method="post" action="adddevice.php">
<input type="text" name="device" placeholder="Device name"><br>
<input type="text" name="type" placeholder="Type"><br>
<input type="text" name="location" placeholder="Location"><br>
<input type="submit" value="Add device">
<input type="reset" value="reset">
</form>
END;

echo $navigation;
echo $content;

?>