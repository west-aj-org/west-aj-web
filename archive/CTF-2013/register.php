<?php include('includes/header.inc.php'); ?>
<style type="text/css">
	.videowrapper { background-image: url('/images/tie_win.jpg'); }
</style>
<div class="videowrapper">		
	<div class="infopane">
		<div class="content">
			<a href="capture_results.php" class="backtrack winning_color">« See the Results</a>
	<h1 class="winning_color"> Registration </h1>
	<div class="breakdown">
		<? 
		if (isset($_COOKIE['id'])) {
			$id = $_COOKIE['id'];
			$sql = "SELECT pid, house FROM students WHERE id = '$id';";
			$result = mysql_query($sql);
			if (mysql_num_rows($result) == 0) {
				setcookie("id", "delete", time() - 500);
				header("Location: register.php");
			}
		}
		if ($_GET['flag'] == '1') {
			echo "<p style=\"color: red\">Please scan the QR code in the Atrium to enroll yourself before capturing a flag</p>";
		}	else { 
		if (isset($_COOKIE['id'])) {
			echo "<p class=\"winning_color\">You have been registered!</p>";
		} else {
		?>
		<form name="proposal" method="post" action="register_process.php">
		<table>
		<tr><td>Your Name:</td><td><input type="text" name="name" /></td></tr>
		<tr><td>Your PID:</td><td><input type="text" name="pid" /></tr></tr>
		<tr><td>Your House:</td><td>
			<select name="house">
				<option value="hawthorn" <? if ($_GET['house'] == "hawthorn") echo "selected=\"selected\""; ?>>Hawthorn</option>
				<option value="hickory" <? if ($_GET['house'] == "hickory") echo "selected=\"selected\""; ?>>Hickory</option>
				<option value="holly" <? if ($_GET['house'] == "holly") echo "selected=\"selected\""; ?>>Holly</option>
				<option value="honey" <? if ($_GET['house'] == "honey") echo "selected=\"selected\""; ?>>Honey Locust</option>
			</select>
		</tr>
		<tr><td><input type="submit" value="Submit!" name="submit"/></td><td><input type="reset" value="Reset!" name="reset"/></td></tr>
		</table>
		</form>
			</div>
		</div>
		<? } ?> 
		<? } ?>
	</div>
</div>
<!-- Begin Footer -->

<?php include('includes/footer.inc.php'); ?>