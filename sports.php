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
			<h1 class="winning_color"> Sports </h1>
			<p>Have a love for being active? Particpate in intramural sports? Here's how to earn points for your house!
			Participation in the HokieGrail earns your house points! All HokieGrail games earn points, as long as your team is  registered under a residence hall and your team name
			contains your house.</p>
			<p>For team sports the first registration is worth 25pts, the second 15pts and third is worth 5pts. If you're interested in forming a fouth team please let us know so we can give
			you credit. </p>
			<p>For individual sports the first registration is worth 15pts, the second is worth 10pts, and third is worth 5pts. Each additional registration is worth 1pt.</p>
			<p>For more information view the <a href="../docs/points_doctrine.pdf" class="winning_color">House Point Doctrine</a> or the <a href="http://www.recsports.vt.edu/intramurals" class="winning_color">Intramural Sports Page</a>.</p>
			<p>West AJ Organized sports events can also count but be sure to submit your proposal in advance!</p>

			<div class="breakdown">
				<h2>Past Events</h2>
				<?php
				$sql = mysql_query("SELECT * FROM points WHERE type='sports' and approved='1'");
				if(mysql_num_rows($sql) > 0) {
					echo "<table>";
					echo "<tr><th>Name</th><th>House</th><th>Amount</th></tr>";
					while ($row = mysql_fetch_array($sql)) {
						printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['event'], $row['house'], $row['amount']);  
					}
					echo "</table>";
				} else {
					echo "<p>There have been no sports events to our knowledge!</p>";
				}
				?>
			</div>
		</div>
	</div>
</div>
<!-- Begin Footer -->

<?php include('includes/footer.inc.php'); ?>