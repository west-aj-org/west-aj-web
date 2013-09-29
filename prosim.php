<?php include('includes/header.inc.php'); ?>

<div class="videowrapper">
	<video id="video_background" width="1280px" height="800px" autoplay loop>
		<source src="images/<?php echo $winner ?>_win.mp4" type="video/mp4">
		<source src="images/<?php echo $winner ?>_win.webm" type="video/webm">
		<source src="images/<?php echo $winner ?>_win.ogv" type="video/ogg">
	</video>
		<div class="points">
		<div id="hawthorn" class="banner"><?php echo sprintf("%04d", $hawthorn) ?></div>
		<div id="hickory" class="banner"><?php echo sprintf("%04d", $hickory) ?></div>
		<div id="spacer">&nbsp;</div>
		<div id="holly" class="banner"><?php echo sprintf("%04d", $holly) ?></div>
		<div id="honey" class="banner"><?php echo sprintf("%04d", $honey) ?></div>
	</div>
	<a href="sports.php" id="sports"></a>
	<a href="prosim.php" id="prosim"></a>
	<a href="education.php" id="education"></a>
	<a href="community.php" id="community"></a>
	<a href="special.php" id="special"></a>
	<a href="documents.php" id="info"></a>
		
	<div class="infopane">
		<div class="content">
			<a href="index.php" class="backtrack winning_color">Back to homepage</a>
			<h1 class="winning_color"> Ut Prosim </h1>
			
			<p>Virginia's Tech motto is of course <em>Ut Prosim</em> and we at the <em>Residential College at West Ambler Johnston</em> feel as though we should reward those who
			follow the philosophy. If you've volunteered and want to earn points for it, submit your volunteer hours to your house's service chair!</p>
			
			<p>The most community-minded house will win 400 points, the second 300 points and so on, ending with the last house earning 400 points. </p>
			
			<p>Other events can also count for Ut Proism so keep an ear out!</p>
			
			<div class="breakdown">
				<h2>Past Events</h2>
				<?php 
				$sql = mysql_query("SELECT * FROM points WHERE type='prosim' and approved='1'");
				if(mysql_num_rows($sql) > 0) {
					echo "<table>";
					echo "<tr><th>Name</th><th>House</th><th>Amount</th></tr>";
					while ($row = mysql_fetch_array($sql)) {
						printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['event'], $row['house'], $row['amount']);  
					}
					echo "</table>";
				} else {
					echo "<p>There have been no Ut Prosim events to our knowledge!</p>";
				}
				?>
			</div>
		</div>
	</div>
</div>
<!-- Begin Footer -->

<?php include('includes/footer.inc.php'); ?>