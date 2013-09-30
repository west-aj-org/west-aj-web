<?php include('includes/header.inc.php'); ?>
<div class="videowrapper">
	<?php include("includes/main.inc.php");?>
	<div class="infopane">
		<div class="content">
<a href="index.php" class="backtrack winning_color">Back to homepage</a>
	<h1 class="winning_color"> Community </h1>
	<p>Community is of the utmost importance in the <em>Residential College</em> so let's give you some points for attending House Dinners, Faculity Teas, and other house 
	events! I mean sure you're already going for the stimulating conversation, but we might as well give you some extra incentive. </p>
	<p>The amount of points you recieve for an event is based on the percent attendance, so if you need more information check out the <a href="/docs/points_doctrine.pdf" 
	class="winning_color">points doctrine</a> for more info!</p>
	<p>If you mean to host your own event be sure to grab an <a href="/docs/attendance_sheet.pdf" class="winning_color">Attendance Sheet</a> as well as submit a <a href="/proposal.php"
	class="winning_color">proposal</a> two weeks in advance!</p>

	<div class="breakdown">
		<h2>Past Events</h2>
		<?php 
		$sql = mysql_query("SELECT * FROM points WHERE type='community' and approved='1'");
		if(mysql_num_rows($sql) > 0) {
			echo "<table>";
			echo "<tr><th>Name</th><th>House</th><th>Amount</th></tr>";
			while ($row = mysql_fetch_array($sql)) {
				printf("<tr><td>%2s</td><td>%s</td><td>%s</td></tr>", $row['event'], $row['house'], $row['amount']);  
			}
			echo "</table>";
		} else {
			echo "<p>There have been no community events to our knowledge!</p>";
		}
		?>
			</div>
		</div>
	</div>
</div>
	
	</div>

</div>

<?php include('includes/footer.inc.php'); ?>