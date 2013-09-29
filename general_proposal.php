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
	<h1 class="winning_color"> Event Proposal </h1>
	<p>Have an proposal in mind? We'd love to hear it! Send off this form and someone will get back to you soon! Make sure your proposal is made two weeks in advance.
	Keep in mind that we may ask you to attend the next cabinet meeting to make your case! </p>
	
	<div class="breakdown">
		<?php
		if (isset($_GET['error']) && $_GET['error'] == 1) {
			echo "<p style=\"color: red\">The was an error processing your proposal!</p>";
		} else if (isset($_GET['success']) && $_GET['success'] == 1) {
			echo "<p class=\"winning_color\">Your proposal has been submitted</p>";
		} 
		?>
		<form name="general_proposal" method="post" action="general_proposal_process.php">
		<table>
		<tr><td>Your Name:</td><td><input type="text" name="name" /></td></tr>
		<tr><td>Your Email:</td><td><input type="text" name="email" /></tr></tr>
		<tr><td>Your House:</td><td>
			<select name="house">
				<option value="hawthorn">Hawthorn</option>
				<option value="hickory">Hickory</option>
				<option value="holly">Holly</option>
				<option value="honey">Honey Locust</option>
			</select>
		</tr>
		<tr><td>Planned Date</td><td><input type="date" name="date" /></td></tr>
		<tr><td>Type of Event:</td><td><input type="text" name="type" /></td></tr>
		<tr><td valign="top">Describe Your Event:</td><td><textarea name="description" rows="10" cols="50">Take as much space as you need!</textarea></td></tr>
		<tr><td><input type="submit" value="Submit!" name="submit"/></td><td><input type="reset" value="Reset!" name="reset"/></td></tr>
		</table>
		</form>
			</div>
		</div>
	</div>
</div>
<!-- Begin Footer -->

<?php include('includes/footer.inc.php'); ?>