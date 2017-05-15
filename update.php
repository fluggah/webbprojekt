<?php
include_once('database.php');
//echo $_POST['device'];
if (isset($_UPDATE['device'])) {
	$query = <<<END
UPDATE shdevices(device,type,location)
VALUES('{$_UPDATE['device']}','{$_UPDATE['type']}','{$_UPDATE['location']}')
END;
	$mysqli->query($query);
	echo 'Product updated!';
}
$content = <<<END
<h1>Add device</h1>
<form method="post" action="updatedevice.php">
<input type="text" name="device" placeholder="Device name"><br>
<input type="text" name="type" placeholder="Type"><br>
<input type="text" name="location" placeholder="Location"><br>
<input type="submit" value="update device">
<input type="reset" value="reset">
</form>
END;

echo $navigation;
echo $content;

?>