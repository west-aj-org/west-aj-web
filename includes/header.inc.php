<?php
	// connect to database
	function winningHouse($points) {
		// determine the winning score
		$winner = max($points);

		// check for ties by counting the occurence of each points
		// ex: Holly and Honey Locust have 1000 points, $tiecheck[1000] 
		// should be 2. If the winning value has more than 1 value,
		// associated with it is a tie, otherwise we return
		// the key of the winning house.

		$tiecheck = array_count_values($points); 
		if ($tiecheck[$winner] == 1) 
			return array_search($winner, $points);
		return "tie";
	}

		// Set MySQL connection credentials
	$host = "localhost";
	$user = "root";
	$password = "root";

	$con = mysql_connect("{$host}","{$user}","{$password}");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("database1258", $con);
	
	/** Get approved points for each house */
	// hawthorn
	$result = mysql_query("SELECT amount FROM points WHERE approved=1 and house='hawthorn'");
	$hawthorn = sum_points($result); 
	
	// hickory 
	$result = mysql_query("SELECT * FROM points WHERE house='hickory' AND approved=1");
	$hickory = sum_points($result); 

	// holly
	$result = mysql_query("SELECT * FROM points WHERE house='holly' AND approved=1");
	$holly = sum_points($result); 

	// honey locust ("honey")
	$result = mysql_query("SELECT * FROM points WHERE house='honey' AND approved=1");
	$honey = sum_points($result); 
	
	function sum_points($sql_result) {
		$points = 0;
		while ($row = mysql_fetch_array($sql_result)) {
			$points = $points + $row['amount']; 
		}
		return $points;
	}

	// build the point array
	$points = array(
		"hawthorn" => $hawthorn,
		"hickory" => $hickory,
		"holly" => $holly,
		"honey" => $honey,
	);

	$winner = winningHouse($points);
	
	function background($house) {
		if ($house == "hawthorn") 	return "images/hawthorn_win.jpg";
		if ($house == "hickory")  	return "images/hickory_win.jpg";
		if ($house == "holly") 	return "images/holly_win.jpg";
		if ($house == "honey")  	return "images/honey_win.jpg";
		else return "images/honey_win.jpg";
	}
	
	function backgroundColor($house) {
		if ($house == "hawthorn") 	return "#016193";
		if ($house == "hickory")  	return "#235c29";
		if ($house == "holly") 	return "red";
		if ($house == "honey")  	return "#e6aa0c";
		else return "white";
	}
	
	function textColor($house) {
		if ($house == "hawthorn") 	return "#f5e9cf";
		if ($house == "hickory")  	return "#dcb46f";
		if ($house == "holly") 	return "green";
		if ($house == "honey")  	return "#44473e";
		else return "white";
	}
?>
<html>
<head>
<title>Residential College @ West Ambler Johnston</title>

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery-back.js"></script>
<script type="text/javascript" src="/playerLite/js/swfobject.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon"  href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<?php /* Background image linked on the fly */ ?>
<style type="text/css"> 
	.videowrapper { background-image: url('images/<?php echo $winner ?>_win.jpg'); }
	.winning_color { color: <?php echo backgroundColor($winner) ?>; }
	a.winning_color:hover { color: <?php echo textColor($winner) ?>; }
</style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
	<div class="container">
	  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="brand" href="index.php">RC@WAJ</a>
	  <div class="nav-collapse collapse">
		<ul class="nav">
		  <li><a href="sports.php"><strong>Sports</strong></a></li>
		  <li><a href="prosim.php"><strong>Ut Prosim</strong></a></li>
		  <li><a href="education.php"><strong>Education</strong></a></li>
		  <li><a href="community.php"><strong>Community</strong></a></li>
		  <li><a href="special.php"><strong>Events</strong></a></li>
		  <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="documents.php"><strong>Documents <i class="caret"></i></strong></a>
			<ul class="dropdown-menu">
			  <li><a href="docs/attendance_sheet.pdf" target="_blank">Attendance Sheet</a></li>
			  <li><a href="docs/points_doctrine.pdf" target="_blank">Points Doctrine</a></li>
			</ul>
		  </li>
		  <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="general_proposal.php"><strong>Forms <i class="caret"></i></strong></a>
			<ul class="dropdown-menu">
			  <li><a href="proposal.php">Events</a></li>
			  <li><a href="general_proposal.php">Proposals</a></li>
			</ul>
		  </li>
		</ul>
	  </div>
	</div>
  </div>
</div>