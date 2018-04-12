<?php

/*********Mail Variables*********/
ini_set('SMTP','myserver');
ini_set('smtp_port',25);
ini_set('sendmail_from','forms@sanskritimun.in');
$date = date('Y/m/d h:i:sa');
$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
$headers .= "From: SMUN Registration Forms <forms@sanskritimun.in>"."\r\n";
$headers .= "X-Sender: Sanskriti MUN < forms@sanskritimun.in >\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$header.= "X-Priority: 1\r\n";
$to2 = "ocsmun2018@gmail.com";
if(isset($_POST['submit-school'])) {
	$school_name = $_POST['school-name'];
	$school_address = $_POST['school-address'];
	$school_phone = $_POST['school-phone'];
	$school_email = $_POST['school-email'];
	$faculty_advisor_name = $_POST['faculty-advisor-name'];
	$faculty_advisor_phone = $_POST['faculty-advisor-phone'];
	$faculty_advisor_email = $_POST['faculty-advisor-email'];
	$student_coordinator_name = $_POST['student-coordinator-name'];
	$student_coordinator_phone = $_POST['student-coordinator-phone'];
	$student_coordinator_email = $_POST['student-coordinator-email'];
	$number_delegates = $_POST['number-delegates'];
	$country_pref_1 = $_POST['country-pref-1'];
	$country_pref_2 = $_POST['country-pref-2'];
	$country_pref_3 = $_POST['country-pref-3'];
	$country_pref_4 = $_POST['country-pref-4'];
	$to = 'munsanskriti+school@gmail.com';
	$subject = 'School Delegation Registration Form from'.' '.$school_name;
	$message = '
		<html>
			<head>
				<style>
					body {
						width: 100%;
					}
					h1.head {
						font: 200 350%/1.5 "Verdana";
						text-align: center;
					}
					h1.title {
						font: 400 200%/2 "Verdana";
						text-align: center;
					}
					h2 {
						font: 400 170%/1.3 "Verdana";
						text-align: center;
					}
					h3 {
						font: 400 140%/1.2 "Verdana";
						text-decoration: underline;
					}
					p {
						font: 100 120%/0.8 "Verdana";
					}
				</style>
			</head>
			<body>
				<h1 class="head">Sanskriti MUN 2018</h1>
				<hr>
				<h1 class="title">Registration Form</h1>
				<h2>School Delegation</h2>
				<hr>
				<h3>School Details</h3>
				<p><strong>School Name:</strong>'.' '.$school_name.'</p>
				<p><strong>School Address:</strong>'.' '.$school_address.'</p>
				<p><strong>School Phone Number:</strong>'.' '.$school_phone.'</p>
				<p><strong>School Email:</strong>'.' '.$school_email.'</p>
				<hr>
				<h3>MUN Faculty Advisor</h3>
				<p><strong>Name:</strong>'.' '.$faculty_advisor_name.'</p>
				<p><strong>Contact Number:</strong>'.' '.$faculty_advisor_phone.'</p>
				<p><strong>Email:</strong>'.' '.$faculty_advisor_email.'</p>
				<hr>
				<h3>MUN Student Coordinator</h3>
				<p><strong>Name:</strong>'.' '.$student_coordinator_name.'</p>
				<p><strong>Contact Number:</strong>'.' '.$student_coordinator_phone.'</p>
				<p><strong>Email:</strong>'.' '.$student_coordinator_email.'</p>
				<hr>
				<p><strong>Proposed Number of Delegates:</strong>'.' '.$number_delegates.'</p>
				<hr>
				<h3>Country Preferences</h3>
				<p><strong>Country 1:</strong>'.' '.$country_pref_1.'</p>
				<p><strong>Country 2:</strong>'.' '.$country_pref_2.'</p>
				<p><strong>Country 3:</strong>'.' '.$country_pref_3.'</p>
				<p><strong>Country 4:</strong>'.' '.$country_pref_4.'</p>
				<hr>
				<small style="text-align:right">Timestamp:&nbsp;'.$date.'</small>
			</body>
		</html>
	';
	mail($to, $subject, $message, $headers);
	mail($to2, $subject, $message, $headers);
}
elseif(isset($_POST['submit-individual'])) {
	$name_1 = $_POST['name-1'];
	$address_1 = $_POST['address-1'];
	$phone_1 = $_POST['phone-1'];
	$email_1 = $_POST['email-1'];
	$school_1 = $_POST['school-1'];
	$grade_1 = $_POST['grade-1'];
	$name_2 = $_POST['name-2'];
	$address_2 = $_POST['address-2'];
	$phone_2 = $_POST['phone-2'];
	$email_2 = $_POST['email-2'];
	$school_2 = $_POST['school-2'];
	$grade_2 = $_POST['grade-2'];
	$experience_1 = $_POST['experience-1'];
	$committee_pref_1 = $_POST['committee-pref-1'];
	$country_pref_1 = $_POST['country-pref-1'];
	$committee_pref_2 = $_POST['committee-pref-2'];
	$country_pref_2 = $_POST['country-pref-2'];
	$to = 'munsanskriti+individual@gmail.com';
	$subject = 'Individual Delegate Registration Form from'.' '.$name;
	$message = '
		<html>
			<head>
				<style>
					body {
						width: 100%;
					}
					h1.head {
						font: 200 350%/1.5 "Verdana";
						text-align: center;
					}
					h1.title {
						font: 400 200%/2 "Verdana";
						text-align: center;
					}
					table {
						width: 60%;
						font-size: 130%;
					}
					h2 {
						font: 400 170%/1.3 "Verdana";
						text-align: center;
					}
					h3 {
						font: 400 140%/1.2 "Verdana";
						text-decoration: underline;
					}
					p {
						font: 100 120%/0.8 "Verdana";
					}
				</style>
			</head>
			<body>
				<h1 class="head">Sanskriti MUN 2018</h1>
				<hr>
				<h1 class="title">Registration Form</h1>
				<h2>Individual Delegate</h2>
				<hr>
				<h3>General Details</h3>

				<p><strong>Name:</strong> '.$name_1.'</p>
				<p><strong>Address:</strong> '.$address_1.'</p>
				<p><strong>Contact Number:</strong> '.$phone_1.'</p>
				<p><strong>Email ID:</strong> '.$email_1.'</p>
				<p><strong>School:</strong> '.$school_1.'</p>
				<p><strong>Grade:</strong> '.$grade_1.'</p>

				<h3>Only for UNSC: (ignore if empty)</h3>

				<p><strong>Name:</strong> '.$name_2.'</p>
				<p><strong>Address:</strong> '.$address_2.'</p>
				<p><strong>Contact Number:</strong> '.$phone_2.'</p>
				<p><strong>Email ID:</strong> '.$email_2.'</p>
				<p><strong>School:</strong> '.$school_2.'</p>
				<p><strong>Grade:</strong> '.$grade_2.'</p>
				<hr>
				<h3>Previous MUN Experience</h3>
				<p>'.$experience_1.'</p>
				<hr>
				<h3>Committee Preferences</h3>
				<table border="1">
					<tr>
						<td>1.</td>
						<td>'.$committee_pref_1.'</td>
						<td>'.$country_pref_1.'</td>
					</tr>
					<tr>
						<td>2.</td>
						<td>'.$committee_pref_2.'</td>
						<td>'.$country_pref_2.'</td>
					</tr>
				</table>
				<hr>
				<small style="text-align:right">Timestamp:&nbsp;'.$date.'</small>
			</body>
		</html>
	';
	mail($to,$subject,$message,$headers);
	mail($to2, $subject, $message, $headers);
}
?>

<html>
	<head>
		<title>Sanskriti MUN Registration Form</title>
		<meta name="viewport" content="width='device-width',initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100|Lato:300" rel="stylesheet">
		<style>
			* {
				margin: 0;
				padding: 0;
			}
			body,
			html {
				background: #282d32;
				min-height: 100%;
				width: 100%;
				color: #eee;
			}
			section.container {
				height: 100%;
				width: 100%;
				display: flex;
				flex-direction: column;
				align-items: center;
				padding-bottom: 10%;
			}
			section.container div.info {
				font-family: "Alegreya Sans";
				width: 60%;
				border-bottom: 1px dotted #eee;
			}
			section.container div.info h1 {
				text-align: center;
				font: 100 300%/2 'Alegreya Sans';
			}
			section.container div.info p,
			section.container div.info li {
				font-size: 21px;
				line-height: 1.3;
			}
			section.container div.info h3 {
				line-height: 2;
				text-align: center;
			}
			section.container div.info pre {
				font-size: 130%;
				white-space: nowrap;
				overflow-y: scroll;
			}
			section.container h1.title {
				font: 100 400%/2 'Alegreya Sans';
				color: #eee;
			}
			section.container h1.title::after {
				content: '';
				padding: 0;
				margin: 0;
				position: absolute;
				height: 3px;
				width: 10vw;
				left: 50%;
				-webkit-transform: translateX(-50%);
				transform: translateX(-50%);
				top: 16%;
				background-color: #ec407a;
			}
			section.container h2 {
				font: 100 200%/1.2 'Alegreya Sans';
				margin: 5% 0 0 0;
				color: #eee;
				font-style: italic;
			}
			section.container h2.type-title {
				width: 100%;
				border-bottom: 1px dotted #ec407a;
				padding: 0 0 3% 0;
				text-align: center;
				font: 100 300%/1.2 'Alegreya Sans';
				font-weight: bold;
				margin: 5% 0 0 0;
			}
			section.container div.options {
				display: flex;
				width: 80%;
				flex-flow: wrap;
				align-items: center;
				padding: 0 0 10% 0;
			}
			section.container a.options {
				font: 100 250%/1.4 'Alegreya Sans';
				transition: all 0.3s ease;
				margin: 2% 0 0 0;
			}
			section.container form input.submit {
				width: 30%;
				text-decoration: none;
				display: flex;
				justify-content: center;
				align-items: center;
				padding: 2vh 3vw;
				font: 300 200%/1 'Lato';
				border: 2px solid #3bcb67;
				border-radius: 5px;
				color: #eee;
				font-variant: small-caps;
				background: transparent;
				transition: 0.3s ease;
				margin: 3% 0 0 0;
				cursor: pointer;
				user-select: none;
				margin: 10% auto 0 auto;
			}
			section.container form input.submit:hover {
				background: #3bcb67;
			}
			section.container form {
				font-family: 'Alegreya Sans';
				width: 90%;
				max-width: 800px;
				padding-bottom: 5%;
			}
			section.container div.form-section {
				padding: 3% 0;
				border-bottom: 1px dotted #ec407a
			}
			section.container h3 {
				font-size: 200%;
			}
			section.container div.input {
				width: 100%;
				display: flex;
				justify-content: space-between;
				margin: 2% 0;
			}
			section.container label {
				font-size: 130%;
			}
			section.container input {
				background: #eee;
				border-radius: 5px;
				border: none;
				padding: 1% 1%;
				width: 50%;
				color: #333;
				font: 100 130%/1.2 'Lato';
			}
			section.container div.number {
				font-size: 130%;
			}
			section.container h4.details {
				font-weight: 100;
			}
			section.container table {
				width: 100%;
			}
			section.container table td {
				text-align: right;
				padding: 1% 0;
			}
			section.container table input {
				width: 90%;
			}
			section.container h2.exit {
				padding: 0 0 3% 0;
				text-align: center;
				font: 100 300%/1.2 'Alegreya Sans';
				font-weight: bold;
			}
			section.container h3.exit {
				padding: 0 0 3% 0;
				text-align: center;
				font: 100 200%/1.2 'Alegreya Sans';
			}
			section.container a {
				text-decoration: none;
				color: #3bcb67;
			}
			section.container a:hover {
				border-bottom: 1px dotted #3bcb67
			}
		</style>
	</head>
	<body>
		<section class="container">
			<h1 class="title">Registration Form</h1>
			<?php
				if (isset($_GET['exit'])) { 
			?>
			<h2 class="exit">Thank you for registering!</h2>
			<h3 class="exit">We will get back to you shortly.<br>For further details or queries, please email <a class="mail" href="mailto:contact@sanskritimun.in">contact@sanskritimun.in</a></h3>
			<?php
				} else {
					if(isset($_GET['type'])) {
						$type=$_GET['type'];
						if($type=='school'){
			?>
			<form method="post" action="register.php?exit">
				<h2 class="type-title">School Delegation</h2>
				<div class='form-section'>
					<h3>School Details</h3>
					<div class='input'><label>School Name:</label><input type="text" name="school-name" required></div>
					<div class='input'><label>School Address:</label><input type="text" name="school-address" required></div>
					<div class='input'><label>School Phone Number:</label><input type="tel" name="school-phone" required></div>
					<div class='input'><label>School Email ID:</label><input type="email" name="school-email" required></div>
				</div>
				<div class='form-section'>
					<h3>MUN Faculty Advisor</h3>
					<div class='input'><label>Name:</label><input type="text" name="faculty-advisor-name" required></div>
					<div class='input'><label>Contact Number:</label><input type="tel" name="faculty-advisor-phone" required></div>
					<div class='input'><label>Email ID:</label><input type="email" name="faculty-advisor-email" required></div>
				</div>
				<div class='form-section'>
					<h3>MUN Student Coordinator</h3>
					<div class='input'><label>Name:</label><input type="text" name="student-coordinator-name" required></div>
					<div class='input'><label>Contact Number:</label><input type="text" name="student-coordinator-phone" required></div>
					<div class='input'><label>Email ID:</label><input type="email" name="student-coordinator-email" required></div>
				</div>
				<div class='input number form-section'>
					<label>Proposed Number of Delegates:&nbsp;</label><input type="number" name="number-delegates" required>
				</div>
				<div class="form-section">
					<h3>Country Preferences</h3>
					<div class="input"><label>Country 1:</label><input type="text" name="country-pref-1"></div>
					<div class="input"><label>Country 2:</label><input type="text" name="country-pref-2"></div>
					<div class="input"><label>Country 3:</label><input type="text" name="country-pref-3"></div>
					<div class="input"><label>Country 4:</label><input type="text" name="country-pref-4"></div>
				</div>
				<input type="submit" class="submit" name="submit-school" value="submit">
			</form>
			<?php
						}
						elseif($type=='individual') {
			?>
			<form method="post" action="register.php?exit">
				<h2 class="type-title">Individual Delegate</h2>
				<div class="form-section">
					<h3>General Details</h3>

					<div class="input"><label>Name:</label><input type="text" name="name-1" required></div>
					<div class="input"><label>Address:</label><input type="text" name="address-1" required></div>
					<div class="input"><label>Contact Number:</label><input type="tel" name="phone-1" required></div>
					<div class="input"><label>Email ID:</label><input type="email" name="email-1" required></div>
					<div class="input"><label>School:</label><input type="text" name="school-1" required></div>
					<div class="input"><label>Grade/Class:</label><input type="text" name="grade-1" required></div>
					
					<h3>General details of second delegate (Only for United Nations Security Council)</h3>

					<div class="input"><label>Name:</label><input type="text" name="name-2"></div>
					<div class="input"><label>Address:</label><input type="text" name="address-2"></div>
					<div class="input"><label>Contact Number:</label><input type="tel" name="phone-2"></div>
					<div class="input"><label>Email ID:</label><input type="email" name="email-2"></div>
					<div class="input"><label>School:</label><input type="text" name="school-2"></div>
					<div class="input"><label>Grade/Class:</label><input type="text" name="grade-2"></div>

				</div>
				<div class="form-section">
					<h3>Previous MUN Experience</h3>
					<h4 class="details">Please enter the Conference Name, Committee and Awards won in the Conferences (if applicable). Seperate each entry by a semi-colon (;).</h4>
					<div class="input"><textarea name="experience-1" row="5" column="50" placeholder="Conference Name, Committee, Award" style="width: 100%;height:200px"></textarea></div>
				</div>
				<div class="form-section">
					<h3>Committee Preferences</h3>
					<h4 class="details">Please fill in order of preference. Refer to <strong>Country Matrix</strong> while filling in preferences</h4>
					<table>
						<tr>
							<td>
								<label>1.</label>
							</td>
							<td>
								<input type="text" name="committee-pref-1" placeholder="Committee Preference" required>
							</td>
							<td>
								<input type="text" name="country-pref-1" placeholder="Country Preference" required>
							</td>
						</tr>
						<tr>
							<td>
								<label>2.</label>
							</td>
							<td>
								<input type="text" name="committee-pref-2" placeholder="Committee Preference" required>
							</td>
							<td>
								<input type="text" name="country-pref-2" placeholder="Country Preference" required>
							</td>
						</tr>
					</table>	
				</div>
				<input type=submit name="submit-individual" class="submit" value="submit">
			</form>
			<?php
						} else {
							echo '<script>window.location="/register.php"</script>';
						}
					} 
					else {
				?>
			<div class="info">
				<h1>Registration Details</h1>
				<h3><strong>Please read the instructions carefully before filling up the form</strong></h3>
				<ul>
					<li>Maximun size of a delegation is 10.</li>
					<li>Schools willing to send more than one delegation are required to fill up a separate registration form.</li>
					<li>Individual delegates may also apply to any of the committees as an individual participant;  however, he/she must produce a photocopy of a valid school ID card</li>
				</ul>
				<h3><strong>Delegate Fees</strong></h3>
				<p>Delegate Fee -- Rs 3000 per delegate (This includes tea and lunch on all 3 days)<br>
					School Registration Fee -- Rs 3500</p><br>
				<p>Total Fee ( 3000 x No. of delegates + 3500)</p><br><br>
				<p>The Cheque/ DD  should be drawn in favour of "Sanskriti School" payable at New Delhi.</p>
				<p>Individual delegate's is non-refundable.</p><br>
				<p>The Delegation Fee is to be sent to the following address (before 1.00pm, if hand-delivered):</p>
				<pre>
					Sanskriti School (MUN)<br>
					Dr. S. Radhakrishnan Marg<br>
					Chanakyapuri<br>
					New Delhi - 110021<br> 
					Phone: 011 26883335/6<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 9810172909: Lusha Jetley, Secretary General<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 8800531030: Gautham Shiva Sreeji, Under-Secretary General<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 9810501965: Manisha Choudhury, MUN Coordinator
				</pre><br>
				<p>Registration charges are not applicable for the Faculty Advisor</p>
				<p style="padding-bottom:2%">The schools that require accommodation are requested to send a seperate mail to <a href="mailto:contact@sanskritimun.in">contact@sanskritimun.in</a>. <strong>ACCOMMODATION DETAILS: <a href="/assets/docs/accommodation.doc" download>View</a></strong></p>
				<p>Joint Crisis Committee and United Nations Correspondents Association forms to be downloaded, filled and emailed to the following email IDs &mdash; JCC <a href="mailto:jcc2018@sanskritimun.in">jcc2018@sanskritimun.in</a>, UNCA: <a href="mailto:unca2018@sanskritimun.in">unca2018@sanskritimun.in</a>.</p>
				<p style="padding-bottom:2%">Those applying for JCC or Press please mention whether you are part of the school delegation.</p>
			</div>
			<h2>Please select the type of registration:</h2>
			<a class="options" href='?type=school'>&rarr;&nbsp;&nbsp;School Delegation</a>
			<a class="options" href='?type=individual'>&rarr;&nbsp;&nbsp;Individual Delegate</a>
			<a class="options" href='/assets/docs/jcc-form.docx' download>&rarr;&nbsp;&nbsp;Joint Crisis Committee Form</a>
			<a class="options" href='/assets/docs/unca-form.docx' download>&rarr;&nbsp;&nbsp;United Nations Correspondents Association Form</a>
			<div style="height:10%;padding:1%;"></div>
			<?php
					}
				}
			?>
		</section>
	</body>
</html>