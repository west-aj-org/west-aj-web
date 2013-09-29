<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pricing Order</title>
<meta name="keywords" content="" />
<meta name="description" content="Events for the Hickory House at West Ambler Johnston at Virginia Tech" />
<link href='http://fonts.googleapis.com/css?family=Satisfy|Fjalla+One|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content"> <a href="#" class="image-style"><img src="images/monies.jpg" width="725" height="300" alt="" /></a>
			<div id="box1" class="post">
			<?php
if(isset($_REQUEST['SendEmail']))
  {
if ((isset($_REQUEST['First']) && (trim($_REQUEST['First']) != ''))
          && (isset($_REQUEST['Last']) && (trim($_REQUEST['Last']) != ''))
          && (isset($_REQUEST['Event']) && (trim($_REQUEST['Event']) != ''))
          && (isset($_REQUEST['Email']) && (trim($_REQUEST['Email']) != ''))
          && (isset($_REQUEST['Amount']) && (trim($_REQUEST['Amount']) != ''))
          && (isset($_REQUEST['DateOfEvent']) && (trim($_REQUEST['DateOfEvent']) != ''))
          && (isset($_REQUEST['DateOfFunds']) && (trim($_REQUEST['DateOfFunds']) != '')))
    {
	$testMoneyCents = explode('.', $_REQUEST['Amount']);
	$centsCorrect = true;
	$noError = true;
	if((isset($testMoneyCents[1]) && $testMoneyCents[1] >= 100)) 
		{
		$centsCorrect = false;
		}
	if($testMoneyCents[1] > 100 || count($testMoneyCents) > 2)
		{
		echo '<h3> Amount does not seem to be in correct format(to many periods or the cents is over two digits). </h3><br />';
		$noError = false;
		}
	if(!filter_var($_REQUEST['Email'], FILTER_VALIDATE_EMAIL))
		{
		echo '<h3> Email does not seem to be in correct format. </h3><br />';
		$noError = false;
		}
	if($noError)
		{
		$vendorInfo = explode('_', $_REQUEST['Vendor']);
		$mailingAddress = "richieh@vt.edu";
		$subject = $_REQUEST['First'] . '\'s PO request';
		$message = "Newest pricing order : \n Name : " . $_REQUEST['First'] . " " . $_REQUEST['Last'] . "\n Event : " . $_REQUEST['Event'] . "\n Amount needed: " . $_REQUEST['Amount'] .
					"\n Date of Event : " . $_REQUEST['DateOfEvent'] . "\n Vendor : " . $vendorInfo[0] . "\n Vendor Address : " . $vendorInfo[1] . 
					"\n Vendor Phone Number : " . $venderInfo[2] . "\n Date funds needed by : " . $_REQUEST['DateOfFunds'] . " \n \n Just message me on facebook which you like more " .
					"or send me an email at richieh@vt.edu";
		$header  = "From:" . $_REQUEST['Email'];
		mail($mailingAddress, $subject, $message, $header);
		echo '<h3> Your order has been sent. </h3>';
		}
    }
  else
    {
    echo '<h3> One or More fields were not filled out, please fix this down below! </h3>';
    }
  }
?>
				<h2 class="title"><a href="#">Pricing Order Form</a></h2>
				<table>
				<p><form method="post" action="PO.php" >
				<tr>
						<td width="150" >
							First Name:
						</td>
						<td width="150" >
							<input type="text" id ="First" name="First" size="12" maxlength="12" 
							<?php echo (isset($_REQUEST['First'])) ? 'value="' . $_REQUEST['First'] . '"': '';?>
							/>
							<br />
						</td>
				</tr>
				<tr>
						<td width="150" >
							Last Name:
						</td>
						<td width="150" >
							<input type="text" id ="Last" name="Last" size="24" maxlength="24"  
							<?php echo (isset($_REQUEST['Last'])) ? 'value="' . $_REQUEST['Last'] . '"' : '';?>
							/>
							<br />
						</td>
				</tr>
				<tr>
						<td width="150" >
							Email:
						</td>
						<td width="150" >
							<input type="text" id ="Email" name="Email" size="24" maxlength="24"  
							<?php echo (isset($_REQUEST['Email'])) ? 'value="' . $_REQUEST['Email'] . '"': '';?>
							/>
							<br />
						</td>
				</tr>
				<tr>
						<td width="150" >
							Event:
						</td>
						<td width="150" >
							<input type="text" id ="Event" name="Event" size="30" maxlength="30"  
							<?php echo isset($_REQUEST['Event']) ? 'value="' . $_REQUEST['Event'] . '"': '';?>
							/>
							<br />
						</td>
				</tr>
				<tr>
						<td width="150" >
							Money Needed(3.50 = 3 dollars 50 cents) : 
						</td>
						<td width="150" >
							<input type="text" id ="Amount" name="Amount" size="10" maxlength="10"  
							<?php echo isset($_REQUEST['Amount']) ? 'value="' . $_REQUEST['Amount'] . '"': '';?>
							/>
							<br />
						</td>
				</tr>
				<tr>
						<td width="150" >
							Date of Event : 
						</td>
						<td width="150" >
							<input type="text" id ="DateOfEvent" name="DateOfEvent" size="12" maxlength="12"  
							<?php echo isset($_REQUEST['DateOfEvent']) ? 'value="' . $_REQUEST['DateOfEvent'] . '"': '';?>
							/>
							<br />
						</td>
				</tr>
				<tr>
						<td width="150" >
							Date Funds Needed By : 
						</td>
						<td width="150" >
							<input type="text" id ="DateOfFunds" name="DateOfFunds" size="12" maxlength="12"  
							<?php echo isset($_REQUEST['DateOfFunds']) ? 'value="' . $_REQUEST['DateOfFunds'] . '"': '';?>
							/>
							<br />
						</td>
				</tr>
				<tr>
						<td width="150" >
							Vendor : 
						</td>
						<td width="150" >
						<select id="Vendor" name="Vendor">
							<option value="Kroger_903 University City Blvd, Blacksburg, VA 24060_(540)951-3045"
							<?php echo (((isset($_REQUEST['Vendor']))&&($_REQUEST['Vendor'] == 'Kroger_903 University City Blvd, Blacksburg, VA 24060_(540)951-3045')) 
										|| (!isset($_REQUEST['Vendor'])))? 'selected' : '';?>>
							Kroger</option>
							<br />
						</td>
				</tr>
				</table>
            <input type="hidden" id="SendEmail" name="SendEmail" value="true" />
						<input type="submit" value="Send Email" />
			<input type="button" value="Home" onclick="window.location='index.html';" />
					</form></p>
			</div>
			<div id="footer">
				<p>Copyright (c) 2013 www.westaj.org.vt.edu All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Edited further by Richard Howell</p>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</body>
</html>
