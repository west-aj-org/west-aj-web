<?php include('includes/header.inc.php'); ?>
<div class="videowrapper">
	<?php include("includes/main.inc.php");?>
		
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