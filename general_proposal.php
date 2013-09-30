<?php include('includes/header.inc.php'); ?>
<div class="videowrapper">
	<?php include("includes/main.inc.php");?>
		
	<div class="infopane">
		<div class="content">
			<a href="index.php" class="backtrack winning_color">Back to homepage</a>
	<h1 class="winning_color"> Proposal Form </h1>
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
		<tr><td>Estimated Date:</td><td><input type="date" name="date" /></td></tr>
		<tr><td valign="top">Recurrence (optional):</td><td><textarea name="recurrence" rows="10" cols="50" placeholder="i.e., once a month"></textarea></td></tr>
		<tr><td valign="top">Description:</td><td><textarea name="description" rows="10" cols="50" placeholder="Type your description here"></textarea></td></tr>
		<tr><td><input class="btn" type="submit" value="Submit!" name="submit"/></td><td><input class="btn" type="reset" value="Reset!" name="reset"/></td></tr>
		</table>
		</form>
			</div>
		</div>
	</div>
</div>
<!-- Begin Footer -->

<?php include('includes/footer.inc.php'); ?>