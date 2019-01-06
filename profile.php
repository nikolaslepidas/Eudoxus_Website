<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/profile.css">

		<title>Εύδοξος - Προφίλ</title>

	</head>
	<body>

	<?php require_once './header.php' ?>
	<div class="wrapper">
		<ul class="breadcrumb">
			<li><a href="index.php">Αρχική</a></li>
			<li>Προφίλ</li> 
		</ul>
	</div>

	<div class="container_grid_profile">

		<div class="user_profile">
			<img src="./icons/student.png" alt="user" title="user"/>
			
			<div class="user_fields">

				<label for="profile_username">Όνομα χρήστη:</label>
				<span name="profile_username" id="profile_username"> όνομα από βάση</span><br><br>

				<label for="profile_email">E-mail:</label>
				<span name="profile_email" id="profile_email"> email από βάση</span><br><br>

				<label for="profile_userGroup">Ομάδα χρήστη:</label>
				<span name="profile_userGroup" id="profile_userGroup"> ομάδα από βάση</span><br><br>

				<div id="student_fields_for_profile" style="display: none;">

					<label for="profile_university">Πανεπιστήμιο:</label>
					<span name="profile_university" id="profile_university"> Πανεπιστήμιο από βάση</span><br><br>

					<label for="profile_department">Τμήμα:</label>
					<span name="profile_department" id="profile_department"> Τμήμα από βάση</span><br><br>

				</div>

				<div id="publisher_fields_for_profile" style="display: none;">

					<label for="profile_publisher_name">Όνομα εκδοτικού οίκου:</label>
					<span name="profile_publisher_name" id="profile_publisher_name"> Όνομα εκδ από βάση</span><br><br>

					<label for="profile_publisher_city">Πόλη εκδοτικού οίκου:</label>
					<span name="profile_publisher_city" id="profile_publisher_city"> Πόλη εκδ από βάση</span><br><br>

					<label for="profile_publisher_phone">Τηλέφωνο εκδοτικού οίκου:</label>
					<span name="profile_publisher_phone" id="profile_publisher_phone"> Τηλέφωνο εκδοτικού οίκου</span><br><br>

				</div>

			</div>

			<div class="edit_profile_button">
				<a href="./edit_profile.php"><button type="button">Επεξεργασία</button></a>
			</div>

		</div>

	</div>

	<?php require_once './footer.php' ?>

    </body>
</html>

<!--
			<form method="post">

				<div class="user_fields">

					<label for="profile_email_to_change"><b>Νέο e-mail</b></label>
					<input type="email" name="profile_email_to_change" placeholder="Εισαγωγή e-mail" id="profile_email">

					<label for="old_profile_password"><b>Παλιό συνθηματικό</b></label>
					<input type="password" name="old_profile_password" placeholder="Εισαγωγή παλιού συνθηματικού" id="old_profile_password">

					<label for="new_profile_password"><b>Νέο συνθηματικό</b></label>
					<input type="password" name="new_profile_password" placeholder="Εισαγωγή νέου συνθηματικού" id="new_profile_password">

				</div>
				
				<button type="submit" name="edit_profile">Αλλαγή</button>

			</form>
-->