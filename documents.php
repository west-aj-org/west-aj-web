
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
	<h1 class="winning_color"> Documents </h1>
	<p>Need a document to host your event you'll find it here!</p>
	<ul class="documents">
		<li><a href="/docs/attendance_sheet.pdf" class="winning_color">Attendance Sheet</a></li>
		<li><a href="/docs/points_doctrine.pdf" class="winning_color">Points Doctrine</a></li>
		<li><a href="/proposal.php" class="winning_color">Event Proposal</a></li>
	</ul>
			</div>
		</div>
	</div>
</div>
<!-- Begin Footer -->

<?php include('includes/footer.inc.php'); ?>