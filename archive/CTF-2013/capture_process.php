<? 
	$con = mysql_connect("database.hosting.vt.edu","site1258","HEOLOIPU");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("database1258", $con);
	
	session_start();
	$id = "";
	$house = "";
	
	if (!isset($_COOKIE['id'])) {
		session_destroy();
		header("Location: register.php?flag=1");
		die("Please scan the QR Code in the Atrium to enroll yourself before you start capturing flags");
	}
	
	$id = $_COOKIE['id'];
	$sql = "SELECT pid, house FROM students WHERE id = '$id';";
	$result = mysql_query($sql);
	echo $sql;
	if (mysql_num_rows($result) == 0) {
		setcookie("id", "delete", time() - 500);
		session_destroy();		
		header("Location: register.php?flag=1");
		die("Please scan the QR Code in the Atrium to enroll yourself before you start capturing flags");
	}
	$result = mysql_fetch_array($result);

	
	$house = $result['house'];
	$student = $result['pid'];
	$flag = $_SESSION['flag'];

 	$result = mysql_query("SELECT house, time, weight FROM flags WHERE flag='$flag' and active='1'");
	if (mysql_num_rows($result) == 0) {
		session_destroy();
		mysql_query("INSERT INTO cheaters (pid, house) VALUES ('$student', '$house')");
		header("Location: capture_results.php?error=3");
		die();
	}
	
	$result = mysql_fetch_array($result);	
	$last_house = $result['house']; 
	$last_time = $result['time'];
	$weight = $result['weight'];
	$capture_time = time() - $last_time;
	
	$result = mysql_query("SELECT UNIX_TIMESTAMP(time) AS K FROM captures WHERE flag='$flag' and pid='$student' ORDER BY time DESC LIMIT 1");
	if (mysql_num_rows($result) == 1) {
		$result = mysql_fetch_array($result); 
		$student_captured = $result['K'];
		$timeout = 15;
		session_destroy();
		header("Location: capture_results.php?error=2");
		die();
		
	}
	
	$result = mysql_query("SELECT points FROM flag_points WHERE house = '$house'");
	$result = mysql_fetch_array($result);
	$total_points = $result['points'];
	$new_points = 500; 
	$total_points = $total_points + $new_points;
	
	mysql_query("UPDATE flag_points SET points='$total_points' WHERE house='$house'");

	$the_time = time();
	mysql_query("UPDATE flags SET house='$house', pid='$student', time='$the_time' WHERE flag='$flag'");
	mysql_query("INSERT INTO captures (house, pid, flag) VALUES ('$house', '$student', '$flag')");
	session_destroy();
	header("Location: capture_results.php?capture=1"); 
	die();
	
 ?>