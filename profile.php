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

		<?php
			// Connect to the database
			require_once 'mysql_connector.php';

			// SQL query to fetch information of registerd users and finds user match.
			$query = "select * from user where email='$_SESSION[user_email]'";
			$result=mysqli_query($connection,$query);
			mysqli_data_seek($result,0);
			$row = mysqli_fetch_assoc($result);

			if ($row['userGroup'] == 'student') {
				$row['userGroup'] = 'Φοιτητής';
				echo "
				<img src='./icons/student.png' alt='user' title='user' style='display: block;' id='student_img_profile'/>
				";
			} else if ($row['userGroup'] == 'publisher') {
				$row['userGroup'] = 'Εκδότης';
				echo "
				<img src='./icons/manager.png' alt='user' title='user' style='display: block;' id='publisher_img_profile'/>
				";
			} else if ($row['userGroup'] == 'distributor') {
				$row['userGroup'] = 'Διανομέας';
				echo "
				<img src='./icons/book.png' alt='user' title='user' style='display: block;' id='book_img_profile'/>
				";
			} else if ($row['userGroup'] == 'sectretary') {
				$row['userGroup'] = 'Γραμματεία';
				echo "
				<img src='./icons/secretary.png' alt='user' title='user' style='display: block;' id='secretary_img_profile'/>
				";
			}
		?>
			<div class="user_fields">

				<label for="profile_username">Όνομα χρήστη:</label>
				<?php
					echo "
					<span name='profile_username' id='profile_username'> $row[username] </span><br><br>					
					";
				?>

				<label for="profile_email">E-mail:</label>
				<?php
					echo "
					<span name='profile_email' id='profile_email'> $row[email] </span><br><br>
					";
				?>
				

				<label for="profile_userGroup">Ομάδα χρήστη:</label>

				<?php
					echo "
					<span name='profile_userGroup' id='profile_userGroup'> $row[userGroup] </span><br><br>					
					";
				?>

				<?php

					if ($row['userGroup'] == 'Φοιτητής') {
						$query = "select * from student where user_email = '$_SESSION[user_email]'";
						$result=mysqli_query($connection,$query);
						mysqli_data_seek($result,0);
						$row = mysqli_fetch_assoc($result);

						echo "
						<div id='student_fields_for_profile'>

						<label for='profile_university'>Πανεπιστήμιο:</label>
						";

						if ($row['university'] == 'ekpa') {
							$row['university'] = 'ΕΚΠΑ';

							echo "
							<span name='profile_university' id='profile_university'> $row[university] </span><br><br>
	
							<label for='profile_department'>Τμήμα:</label>
							";

							if ($row['department'] == 'computer') {
								$row['department'] = 'Πληροφορικής & Τηλεπικοινωνιών';
							} else if ($row['department'] == 'maths') {
								$row['department'] = 'Μαθηματικών';
							} else if ($row['department'] == 'chemistry') {
								$row['department'] = 'Χημείας';
							}

							echo "
							<span name='profile_department' id='profile_department'> $row[department] </span><br><br>
		
							</div>
							";
						}
					} else if ($row['userGroup'] == 'Εκδότης') {
						$query = "select * from publisher where user_email = '$_SESSION[user_email]'";
						$result=mysqli_query($connection,$query);
						mysqli_data_seek($result,0);
						$row = mysqli_fetch_assoc($result);

						echo "
						<div id='publisher_fields_for_profile'>
	
						<label for='profile_publisher_name'>Όνομα εκδοτικού οίκου:</label>
						<span name='profile_publisher_name' id='profile_publisher_name'> $row[brand_name] </span><br><br>
	
						<label for='profile_publisher_city'>Πόλη εκδοτικού οίκου:</label>
						<span name='profile_publisher_city' id='profile_publisher_city'> $row[city] </span><br><br>
	
						<label for='profile_publisher_phone'>Τηλέφωνο εκδοτικού οίκου:</label>
						<span name='profile_publisher_phone' id='profile_publisher_phone'> $row[phone] </span><br><br>
	
						</div>
						";
					}
				?>

			</div>

			<div class="edit_profile_button">
				<a href="./edit_profile.php"><button type="button">Επεξεργασία</button></a>
			</div>

		</div>

	</div>

	<?php require_once './footer.php' ?>

    </body>
</html>