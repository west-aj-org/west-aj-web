<?php include('includes/header.inc.php'); ?>
<div class="videowrapper">
	<?php include("includes/main.inc.php");?>
		
	<div class="infopane">
		<div class="content">
			<a href="index.php" class="backtrack winning_color">Back to homepage</a>
			<h1 class="winning_color"> Academics </h1>
			<p>Of course we should give points to our most studious of residents! This year points will be given from the <em>Citizen's Science Challenge</em> sponsor by the 
			Virginia Tech Library and NASA.</p>
			<p>For more information <a href="http://purdom6.wix.com/waj-citizenscience" class="winning_color">click here</a></p>
			
			<div class="breakdown">
				<h2>Past Events</h2>
				<?php 
				$sql = mysql_query("SELECT * FROM points WHERE type='academic' and approved='1'");
				if(mysql_num_rows($sql) > 0) {
					echo "<table>";
					echo "<tr><th>Name</th><th>House</th><th>Amount</th></tr>";
					while ($row = mysql_fetch_array($sql)) {
						printf("<tr><td>%2s</td><td>%s</td><td>%s</td></tr>", $row['event'], $row['house'], $row['amount']);  
					}
				echo "</table>";
				} else {
					echo "<p>There have been no academic events to our knowledge!</p>";
				}
				?>
			</div>
		</div>
	</div>
</div>