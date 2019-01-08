<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/profile.css">
		<link rel="stylesheet" href="css/bookOrder.css">

		<title>Εύδοξος - Επεξεργασία προφίλ</title>

	</head>
	<body>

	<?php require_once './header.php' ?>
	<div class="wrapper">
		<ul class="breadcrumb">
            <li><a href="./index.php">Αρχική</a></li>
            <li><a href="./profile.php">Προφίλ</a></li>
			<li>Επεξεργασία προφίλ</li> 
		</ul>
	</div>

	<?php
	// Connect to the database
	require_once 'mysql_connector.php';

	if(isset($_POST['edit_profile'])) {

		if($_POST['profile_email_to_change'] != "") {
			$new_email = $_POST['profile_email_to_change'];
		}

	}
	
	?>
<div class="padding_needed_for_footer_edit_profile">

	<div class="container_grid_profile">

		<div class="user_profile">
			<img src="./icons/student.png" alt="user" title="user"/>

            <form method="post">

                <div class="user_fields_for_edit">

                    <label for="edit_profile_email">Νέο e-mail</label>
                    <input type="email" name="profile_email_to_change" placeholder="Εισαγωγή e-mail" id="edit_profile_email">

                    <label for="old_profile_password">Παλιό συνθηματικό</label>
                    <input type="password" name="old_profile_password" placeholder="Εισαγωγή παλιού συνθηματικού" id="old_profile_password">

                    <label for="new_profile_password">Νέο συνθηματικό</label>
                    <input type="password" name="new_profile_password" placeholder="Εισαγωγή νέου συνθηματικού" id="new_profile_password">

					<?php
					
					if (isset($_SESSION['user_email'])) {
						$query = "select userGroup from user where email = '$_SESSION[user_email]'";
						$result=mysqli_query($connection,$query);
						mysqli_data_seek($result,0);
						$row = mysqli_fetch_assoc($result);
						$userGroup = implode($row);

						if($userGroup == 'publisher') {
							echo "
							<div id='edit_publisher_fields_for_profile'>

							<label for='edit_profile_publisher_name'>Όνομα εκδοτικού οίκου</label>
							<input type='text' name='edit_profile_publisher_name' placeholder='Εισαγωγή ονόματος εκδοτικού οίκου' id='edit_profile_publisher_name'>
	
							<label for='edit_profile_publisher_city'>Πόλη εκδοτικού οίκου</label>
							<input type='text' name='edit_profile_publisher_city' placeholder='Εισαγωγή πόλης εκδοτικού οίκου' id='edit_profile_publisher_city'>
	
							<label for='profile_publisher_phone'>Τηλέφωνο εκδοτικού οίκου</label>
							<input type='text' name='edit_profile_publisher_phone' placeholder='Εισαγωγή τηλεφώνου εκδοτικού οίκου' id='edit_profile_publisher_phone'>
	
							</div>
							";
						}
					}
					
					?>

				</div>

                <button type="submit" name="edit_profile">Αλλαγή</button>

            </form>
            
        </div>

	</div>

</div>

	<?php require_once './footer.php' ?>

    </body>
</html>

<!--

-->