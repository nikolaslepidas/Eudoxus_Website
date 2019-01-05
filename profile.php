<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
        <link rel="stylesheet" href="css/communication_form.css">
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

				<label></label>

			</div>

<!---->
			<form method="post">

				<div class="user_fields">

					<label for="profile_email"><b>Νέο e-mail</b></label>
					<input type="email" name="profile_email" placeholder="Εισαγωγή e-mail" id="profile_email">

					<label for="old_profile_password"><b>Παλιό συνθηματικό</b></label>
					<input type="password" name="old_profile_password" placeholder="Εισαγωγή παλιού συνθηματικού" id="old_profile_password">

					<label for="new_profile_password"><b>Νέο συνθηματικό</b></label>
					<input type="password" name="new_profile_password" placeholder="Εισαγωγή νέου συνθηματικού" id="new_profile_password">

				</div>
				
				<button type="submit" name="edit_profile">Αλλαγή</button>

			</form>

		</div>
	</div>

	<?php require_once './footer.php' ?>

    </body>
</html>