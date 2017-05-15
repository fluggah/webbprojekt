<?php
include_once('database.php');
//echo $_POST['device'];
if (isset($_DELETE['device'])) {
	$query = <<<END
DELETE shdevices(device,type,location)
VALUES('{$_DELETE['device']}','{$_DELETE['type']}','{$_DELETE['location']}')
END;
	$mysqli->query($query);
	echo 'Product deleted!';
}
$content = <<<END
<h1>Add device</h1>
<form method="post" action="delete.php">
<input type="text" name="device" placeholder="Device name"><br>
<input type="text" name="type" placeholder="Type"><br>
<input type="text" name="location" placeholder="Location"><br>
<input type="submit" value="delete device">
<input type="reset" value="reset">
</form>
END;

echo $navigation;
echo $content;

?>