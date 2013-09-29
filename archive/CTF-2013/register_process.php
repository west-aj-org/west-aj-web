<?
	$con = mysql_connect("database.hosting.vt.edu","site1258","HEOLOIPU");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("database1258", $con);
	
	if (trim($_POST['name']) == "" || trim($_POST['pid'] == "")) {
		header("Location: register.php?error=1");
		die();
	}
	else if ($_POST['house'] != "hawthorn" && $_POST['house'] != "hickory" && $_POST['house'] != "holly" && $_POST['house'] != "honey") {
		header("Location: register.php?error=1");
		die();
	}
	
	// check to set if they are already registered
	$result = mysql_query("SELECT id FROM students WHERE pid = '".$_POST['pid']."'");
	if (mysql_num_rows($result) == 1) {
		$result = mysql_fetch_array($result);
		setcookie("id", $result['id'], time() + 24 * 3600); // set cookie for 24 hours
	} else {
		$id = md5($_POST['name'].$_POST['house'].$_POST['pid']);
		$sql = "INSERT INTO students (name, pid, house, id) VALUES ('" .$_POST['name']. "', '" .$_POST['pid'] ."', '". $_POST['house']."', '".$id."');";
		if (!mysql_query($sql)) ("Location: register.php?error=2");
		setcookie("id", $id, time() + 24 * 3600); // set cookie for 24 hours
	}
	
	header("Location: register.php");
?>