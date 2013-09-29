<?
	$hawthorn_population = 245.0;
	$hickory_population = 176.0;
	$holly_population = 246.0;
	$honey_population = 177.0;
	
	if (isset($_POST['submit'])) {
		if (!isset($_POST['name']) || !isset($_POST['house']) || !isset($_POST['event']) || 
			!isset($_POST['date']) || !isset($_POST['number'])) {
			header("Location: point_proposal.php?error=1");
			die();
		}
		if ($_POST['name'] == "" || !($_POST['house'] == "hawthorn" || $_POST['house'] == "hickory" || $_POST['house'] == "holly" || $_POST['house'] == "honey") ||
			$_POST['event'] == "" || $_POST['date'] == "" || $_POST['number'] < 0 || $_POST['number'] > 300) {
			header("Location: proposal.php?error=1");
			die();
		}
		
		$house = $_POST['house'];
		$percent = 0.0;
		$number = floatval($_POST['number']);
		if ($house == "hawthorn") {
			$percent = $number / $hawthorn_population * 100.0; 
		} else if ($house == "hickory") {
			$percent = $number / $hickory_population * 100.0;
		} else if ($house == "holly") {
			$percent = $number / $holly_population * 100.0;
		} else if ($house == "honey") {
			$percent = $number / $honey_population * 100.0;
		}
		
		if ($percent < 5.0) {
			$points = 0;
		} else if ($percent < 10.0) {
			$points = 10;
		} else if ($percent < 20.0) {
			$points = 20;
		} else if ($percent < 50.0) {
			$points = 40;
		} else {
			$points = 100;
		}
		
		$event = $_POST['event'];
		$con = mysql_connect("database.hosting.vt.edu","site1258","HEOLOIPU");
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("database1258", $con);
		
		if (mysql_query("INSERT INTO points(house, amount, event, type) VALUES ('$house', '$points', '$event', 'community')") &&
			mail("tucks314@gmail.com", "House Point Request", print_r($_POST, true)."\r\n Points Given: \t $points", "From: tlegard@vt.edu")) {
			
			header("Location: proposal.php?success=$points");
			die();
		}
		header("Location: proposal.php?error=1;");
		die();
	} 

?>