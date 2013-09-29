<?php include('includes/header.inc.php'); ?>
<script type = "text/javascript">
function showForm(){
var selopt = document.getElementById("posts").value;
if (selopt == "empty") {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
}
if (selopt == "copres") {
document.getElementById("f1").style.display="block";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
}
if (selopt == "service") {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="block";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
}
if (selopt == "sports") {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="block";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
}
if (selopt == "education") {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="block";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
}
if (selopt == "secretary") {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="block";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
}
if (selopt == "historian") {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="block";
document.getElementById("f7").style.display="none";
}
if (selopt == "webmaster") {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display= "block";
}
}

</script>
<div class="videowrapper">
	<video id="video_background" width="1280px" height="800px" autoplay loop>
		<source src="images/<? echo $winner ?>_win.mp4" type="video/mp4">
		<source src="images/<? echo $winner ?>_win.webm" type="video/webm">
		<source src="images/<? echo $winner ?>_win.ogv" type="video/ogg">
	</video>
		<div class="points">
		<div id="hawthorn" class="banner"><? echo sprintf("%04d", $hawthorn) ?></div>
		<div id="hickory" class="banner"><? echo sprintf("%04d", $hickory) ?></div>
		<div id="spacer">&nbsp;</div>
		<div id="holly" class="banner"><? echo sprintf("%04d", $holly) ?></div>
		<div id="honey" class="banner"><? echo sprintf("%04d", $honey) ?></div>
	</div>
	<a href="sports.php" id="sports"></a>
	<a href="prosim.php" id="prosim"></a>
	<a href="education.php" id="education"></a>
	<a href="community.php" id="community"></a>
	<a href="special.php" id="special"></a>
	<a href="documents.php" id="info"></a>
		
	<div class="infopane">
		<div class="content">
			<a href="index.php" class="backtrack winning_color">« Back to homepage</a>
	<h1 class="winning_color"> Cabinet Application </h1>
	<p>  </p>
	
	<div class="breakdown">
		<?php 
		if ($_GET['error'] == 1) {
			echo "<p style=\"color: red\">The was an error processing your application!</p>";
		} else if ($_GET['success'] == 1) {
			echo "<p class=\"winning_color\">Your application has been submitted, remember to submit your signature sheet and any additional files we may need</p>";
		} 
		?>
		<form name="proposal" method="post" action="application_process.php">
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
		<tr><td>Position:</td><td>
			<select name="position" id="posts" onchange="showForm()">
				<option value="empty">-----</option>
				<option value="copres">Co-President</option>
				<option value="service">Service Chair</option>
				<option value="sports">Sports and Activities Chair</option>
				<option value="education">Education and Academics Chair</option>
				<option value="secretary">Secretary/Treasurer</option>
				<option value="historian">Historian/Photographer</option>
				<option value="webmaster">Webmaster</option>
			</select></td></tr>
			<tr><td colspan="2">Why do you want to be a part of the Cabinet of the Residential College at West AJ?</td></tr>
			<tr><td colspan="2"><textarea name="why">Please keep to 200 words or fewer!</textarea></td></tr>
			<tr><td colspan="2">How would you use your position to generate community within and between the houses? </td></tr>
			<tr><td colspan="2"><textarea name="how" cols="40">Please keep to 200 words or fewer!</textarea></td></tr>
			<tr><td colspan="2">How have you contributed to the WAJ or your house community during the 2012-2013 year? </td></tr>
			<tr><td colspan="2"><textarea name="contribution" cols="40">Please keep to 200 words or fewer!</textarea></td></tr>
		</table>
		
		<div id="f1"> 
			<table>
			<tr><td colspan="2">Please explain any previous leadership experience you have.</td></tr>
			<tr><td colspan="2"><textarea name="pres_question1">Please keep to 200 words or fewer!</textarea></td></tr>
			<tr><td colspan="2">It is May 15th, 2014, looking back on the past year, what has the Residential College achieved under your leadership as a Co-President? </td></tr>
			<tr><td colspan="2"><textarea name="pres_question2" cols="40">Please keep to 200 words or fewer!</textarea></td></tr>
			<tr><td><input type="submit" value="Submit!" name="submit"/></td><td><input type="reset" value="Reset!" name="reset"/></td></tr>
			</table>
		</div>
		
		<div id="f2">
			<table>
			<tr><td colspan="2">Service is one of the pillars of VT and of the RC model. What do you think best exemplifies Ut Prosim to you?</td></tr>
			<tr><td colspan="2"><textarea name="service_question1">Please keep to 200 words or fewer!</textarea></td></tr>
			<tr><td colspan="2">Why is service important to a community? </td></tr>
			<tr><td colspan="2"><textarea name="service_question2" cols="40">Please keep to 200 words or fewer!</textarea></td></tr>
			<tr><td><input type="submit" value="Submit!" name="submit"/></td><td><input type="reset" value="Reset!" name="reset"/></td></tr>
			</table>
		</div>
		
		<div id="f3">
			<table>
			<tr><td colspan="2">Give some examples of events that you feel would build stronger house identities and promote inter-house competition. </td></tr>
			<tr><td colspan="2"><textarea name="sports_question1">Please keep to 200 words or fewer!</textarea></td></tr>
			<tr><td><input type="submit" value="Submit!" name="submit"/></td><td><input type="reset" value="Reset!" name="reset"/></td></tr>
			</table>
		</div>
		
		<div id="f4">
			<table>
			<tr><td colspan="2">Please provide some examples of academic programs you would implement throughout WAJ or how you would continue the current programs. How would you also encourage faculty involvement and interaction with students in the RC? </td></tr>
			<tr><td colspan="2"><textarea name="education_question1">Please keep to 200 words or fewer!</textarea></td></tr>
			<tr><td><input type="submit" value="Submit!" name="submit"/></td><td><input type="reset" value="Reset!" name="reset"/></td></tr>
			</table>
		</div>
		
		<div id="f5">
			<table>
			<tr><td colspan="2">We are requesting that the applicants for the Secretary/Treasurer submit “meeting minutes” from an episode of your favorite TV show to the following e-mail: wajsubmissions@gmail.com </td></tr>
			<tr><td><input type="submit" value="Submit!" name="submit"/></td><td><input type="reset" value="Reset!" name="reset"/></td></tr>
			</table>
		</div>
		
		<div id="f6">
			<table>
			<tr><td colspan="2">We are requesting that the applicants for the Historian/Photographer submit a photo portfolio, a total of no more than 20 photos, in any electronic format to the following e-mail: wajsubmissions@gmail.com </td></tr>
			<tr><td><input type="submit" value="Submit!" name="submit"/></td><td><input type="reset" value="Reset!" name="reset"/></td></tr>
			</table>
		</div>
		
		<div id="f7">
			<table>
			<tr><td colspan="2">We are requesting that applicants for the Webmaster position submit their application in the form of a creative webpage featuring a topic of their choosing. Please submit the link / compressed archive of your webpage to the following e-mail: wajsubmissions@gmail.com</td></tr>
			<tr><td><input type="submit" value="Submit!" name="submit"/></td><td><input type="reset" value="Reset!" name="reset"/></td></tr>
			</table>
		</div>
		</form>
			</div>
		</div>
	</div>
</div>
<!-- Begin Footer -->

<?php include('includes/footer.inc.php'); ?>