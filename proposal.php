<?php include('includes/header.inc.php'); ?>
<div class="videowrapper">
	<?php include("includes/main.inc.php");?>
		
	<div class="infopane">
		<div class="content">
			<a href="index.php" class="backtrack winning_color">Back to homepage</a>
	<h1 class="winning_color"> Event Form </h1>
	<p>Have an event in mind? We'd love to hear it! Send off this form and someone will get sback to you soon! Make sure your proposal is made two weeks in advance.
	Keep in mind that we may ask you to attend the next cabinet meeting to make your case! </p>
	
	<div class="breakdown">
		<?php 
		if (isset($_GET['error']) && $_GET['error'] == 1) {
			echo "<p style=\"color: red\">The was an error processing your proposal!</p>";
		} else if (isset($_GET['success']) && $_GET['success'] == 1) {
			echo "<p class=\"winning_color\">Your proposal has been submitted</p>";
		} 
		?>
		<form name="proposal" method="post" action="proposal_process.php">
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
		<tr><td><input class="btn" type="submit" value="Submit!" name="submit"/></td><td><input class="btn" type="reset" value="Reset!" name="reset"/></td></tr>
		</table>
		</form>
			</div>
		</div>
	</div>
</div>
<!-- Begin Footer -->

<?php include('includes/footer.inc.php'); ?>