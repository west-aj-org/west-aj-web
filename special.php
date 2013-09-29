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
	<a href="sports.php" id="sports" alt="Sports" title="Sports"></a>
	<a href="prosim.php" id="prosim" alt="Ut Prosim" title="Ut Prosim"></a>
	<a href="education.php" id="education" alt="Education" title="Education"></a>
	<a href="community.php" id="community" alt="Community" title="Community"></a>
	<a href="special.php" id="special" alt="Special Events" title="Special Events"></a>
	<a href="documents.php" id="info" alt="Misc. Info" title="Misc. Info"></a>
		
	<div class="infopane">
		<div class="content">
	<a href="index.php" class="backtrack winning_color">Back to homepage</a>
	<h1 class="winning_color"> Special Events </h1>
	<p>Every now and then we'll host a special event that will be lots of House Points! Be sure to come out and participate in order to get a bunch of House Points for your house!</p>
	<p>Keep an eye on the Residential College's Facebook page, <a href="http://www.facebook.com/groups/316199245090826/" class="winning_color">located here</a>, for these events!</p>
	<div class="breakdown">
		<h2>Past Events</h2>
		<?php 
		$sql = mysql_query("SELECT * FROM points WHERE type='special' and approved='1'");
		if(mysql_num_rows($sql) > 0) {
			echo "<table>";
			echo "<tr><th>Name</th><th>House</th><th>Amount</th></tr>";
			while ($row = mysql_fetch_array($sql)) {
				printf("<tr><td>%2s</td><td>%s</td><td>%s</td></tr>", $row['event'], $row['house'], $row['amount']);  
			}
			echo "</table>";
		} else {
			echo "<p>There have been no special events to our knowledge!</p>";
		}
		?>
			</div>
		</div>
	</div>
</div>
	
	</div>

</div>

<?php include('includes/footer.inc.php'); ?>