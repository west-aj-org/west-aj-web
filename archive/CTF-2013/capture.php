<?php
	session_start();
?>
<?php include('includes/header.inc.php'); ?>
<div class="popup">
		 <? if ($_GET['error']) { ?><font color=red>You did something wrong</font><? } ?>
		 <? if ($_GET['capture'] == 1 ) { ?><font color=green>You have captured the flag!</font><? } ?>
		 <? if ($_GET['capture'] == 2 ) { ?><font color=green>You already have this flag!</font><? } ?>
	
		<p> Capture the flag!</p>
		<form name="addpoints" action="capture_process.php" method="post">
		<table>
		<tr><td>Enter Your Room Number:</td>
		<td><td><input type="text" name="room" /></td></tr>
		<tr><td><input type="submit" value="Submit" /></td><td><input type="reset" value="Reset"></td></tr>
		</table>
		</form>
	</div>
<!-- Begin Footer -->
<?php include('includes/footer.inc.php'); ?>