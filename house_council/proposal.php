<?php include('../includes/header.inc.php'); ?>
<div class="videowrapper">
			
	<div class="infopane">
		<div class="content">
			<a href="index.php" class="backtrack winning_color">« Back to homepage</a>
	<h1 class="winning_color"> Attedance Submission </h1>
	<p>Please fill out the form with the event name, number of attendies and the house you are apart of. Remember to turn in your attendance sheet at the earliest convience. </p>
	
	<div class="breakdown">
		<? 
		if ($_GET['error'] == 1) {
			echo "<p style=\"color: red\">The was an error processing your request!</p>";
		} else if ($_GET['success']) {
			echo "<p class=\"winning_color\">Your proposal has been submitted, you should recieve ".$_GET['success']." points</p>";
		} 
		?>
		<form name="proposal" method="post" action="proposal_process.php">
		<table>
		<tr><td>Your Name:</td><td><input type="text" name="name" /></td></tr>
		<tr><td>Your House:</td><td>
			<select name="house">
				<option value="hawthorn">Hawthorn</option>
				<option value="hickory">Hickory</option>
				<option value="holly">Holly</option>
				<option value="honey">Honey Locust</option>
			</select>
		</tr>
		<tr><td>Event Name:</td><td><input type="text" name="event" /></td></tr>
		<tr><td>Date of Event:</td><td><input type="date" name="date" /></td></tr>
		<tr><td>Number of Attendees:</td><td><input type="number" name="number" quanitity="1" min="0" max="300" /></td></tr>

		<tr><td><input type="submit" value="Submit!" name="submit"/></td><td><input type="reset" value="Reset!" name="reset"/></td></tr>
		</table>
		</form>
			</div>
		</div>
	</div>
</div>
<!-- Begin Footer -->

<?php include('../includes/footer.inc.php'); ?>