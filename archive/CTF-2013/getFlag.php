
<?
	$con = mysql_connect("database.hosting.vt.edu","site1258","HEOLOIPU");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("database1258", $con);
	
	// get the base amount of time they have
	$result = mysql_query("SELECT points FROM flag_points WHERE house='hawthorn'");
	$hawthorn_points = mysql_fetch_array($result);
	$hawthorn_points = $hawthorn_points[0];

	
		// get the base amount of time they have
	$result = mysql_query("SELECT points FROM flag_points WHERE house='hickory'");
	$hickory_points = mysql_fetch_array($result);
	$hickory_points = $hickory_points[0];
	

	
			// get the base amount of time they have
	$result = mysql_query("SELECT points FROM flag_points WHERE house='holly'");
	$holly_points = mysql_fetch_array($result);
	$holly_points = $holly_points[0];
	
	
	// get the base amount of time they have
	$result = mysql_query("SELECT points FROM flag_points WHERE house='honey'");
	$honey_points = mysql_fetch_array($result);
	$honey_points = $honey_points[0];
	
	
?>

<div id="hawthorn_flag" class="flag"><span style="font-size: 18pt;">Hawthorn:<br/></span> <span id="hawthorn"><? echo $hawthorn_points ?></span></div>
<div id="hickory_flag" class="flag"><span style="font-size: 18pt;">Hickory:<br/></span> <span id="hickory"><? echo $hickory_points ?></span></div>
<br clear="all" />
<div id="holly_flag" class="flag"><span style="font-size: 18pt;">Holly:<br/></span> <span id="holly"><? echo $holly_points ?></span></div>
<div id="honey_flag" class="flag"><span style="font-size: 18pt;">Honey Locust:<br/></span><span id="honey"><? echo $honey_points ?></span></div>
