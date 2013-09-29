<?
	$con = mysql_connect("database.hosting.vt.edu","site1258","HEOLOIPU");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("database1258", $con);
	
	$result = mysql_query("SELECT time FROM flag_time WHERE house='hawthorn'");
	$hawthorn_time = mysql_fetch_array($result);
	
	$result = mysql_query("SELECT time FROM flag_time WHERE house='hickory'");
	$hickory_time = mysql_fetch_array($result);
	
	$result = mysql_query("SELECT time FROM flag_time WHERE house='holly'");
	$holly_time = mysql_fetch_array($result);

	$result = mysql_query("SELECT time FROM flag_time WHERE house='honey'");
	$honey_time = mysql_fetch_array($result);
?>
<? include("includes/header.inc.php");?>
<script src="js/jquery.jcountdown1.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#countdown").countdown({
		htmlTemplate: "%{h} <span class=\"cd-time\">hours</span> %{m} <span class=\"cd-time\">mins</span> %{s} <span class=\"cd-time\">sec</span>",
		date: "march 23, 2013 14:00",
		onChange: function( event, timer ){
		


		},
		onComplete: function( event ){
			$(this).html("Completed");
		},
		leadingZero: true,
		direction: "down"
	});
	
	//$("#time").countdown();
});
</script>
<style type="text/css">
	body { background-image: url('/images/tie_win.jpg'); }
</style>
<div id="flag_banner"><h1>Capture the Flag!</h1>
<? if ($_GET['error']) { ?><p><font color=red>You did something wrong</font></p><? } ?>
<? if ($_GET['error'] == 2) { ?><p><font color=red>You've already captured this flag.</font></p><? } ?>
<? if ($_GET['error'] == 3) { ?><p><font color=red>This flag doesn't exist... cheater</font></p><? } ?>

<? if ($_GET['capture'] == 1 ) { ?><p><font color=green>You have captured the flag!</font></p><? } ?>
<? if ($_GET['capture'] == 2 ) { ?><p><font color=green>You already have this flag!</font></p><? } ?>
Time Left: <span id="countdown">1000</span>
</div>

<div id = "stuff"><? include("getFlag.php");?></div>

<script type="text/javascript">
jQuery(function($){
  setInterval(function(){
    $.get( '/getFlag.php', function(newRowCount){
      $('#stuff').html( newRowCount );
    });
  },60000); // 5000ms == 5 seconds
});
</script>
<? include("includes/footer.inc.php");?>

</body>
</html>