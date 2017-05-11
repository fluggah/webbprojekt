<?php
session_name('Website');
session_start();
$host = "localhost";
$user = "johnie16";
$pwd = "5QMc_D8v9C";
$db = "johnie16_db";
$mysqli = new mysqli($host, $user, $pwd, $db);
if(isset($_SESSION['username']) and $_SESSION['username'] == 'admin')
{
	$navigation = <<<END
	 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="template.html" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
  	<a href="adddevice.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Add device</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account"><img src="max.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"> Log out</a>
 </div>
</div>
END;
}
else{
$navigation = <<<END
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="template.html" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>

 </div>
</div>
END;
}
$newnavigation = <<<END
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="template.html" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>

 </div>
</div>
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