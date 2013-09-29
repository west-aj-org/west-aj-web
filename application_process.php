<?php
	$not_answered = "Please keep to 200 words or fewer!";
	if ( !isset($_POST["name"]) || $_POST['name'] == "" || !isset($_POST["email"]) || $_POST['email'] == "" ) {
		$error = true;
	}
	else if ( $_POST["house"] != "hawthorn" && $_POST["house"] != "hickory" && $_POST["house"] != "holly" && $_POST["house"] != "honey") {
		$error = true;
	}
	else if ( $_POST["position"] != "copres" && $_POST["position"] != "service" && $_POST["position"] != "sports" && $_POST["position"] != "education" 
	       && $_POST["position"] != "secretary" && $_POST["position"] != "historian" && $_POST["position"] != "webmaster") {
		$error = true;
	}
	else if ($_POST["why"] == $not_answered || $_POST["how"] == $not_answered || $_POST["contribution"] == $not_answered) {
		$error = true;
	}
	else if ( $_POST["position"] == "copres" && ($_POST["pres_question1"]  == $not_answered || $_POST["pres_question1"]  == $not_answered)) {
		$error = true;
	}
	else if ( $_POST["position"] == "service" && ($_POST["service_question1"]  == $not_answered || $_POST["service_question1"]  == $not_answered)) {
		$error = true;
	}
	else if ( $_POST["position"] == "sports" && ($_POST["sports_question1"]  == $not_answered)) {
		$error = true;
	}
	else if ( $_POST["position"] == "education" && ($_POST["education_question1"]  == $not_answered)) {
		$error = true;
	}
	
	if (!$error) {
		if (mail("wajsubmissions@gmail.com", "Council Application", print_r($_POST, true))) {
			header("Location: application.php?success=1");
			die();
		}
	}
	header("Location: application.php?error=1");
	die();
?>