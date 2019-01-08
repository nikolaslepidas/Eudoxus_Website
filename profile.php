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
				$userGroup = 'Φοιτητής';
				echo "
				<img src='./icons/student.png' alt='user' title='user' style='display: block;' id='student_img_profile'/>
				";
			} else if ($row['userGroup'] == 'publisher') {
				$userGroup = 'Εκδότης';
				echo "
				<img src='./icons/manager.png' alt='user' title='user' style='display: block;' id='publisher_img_profile'/>
				";
			} else if ($row['userGroup'] == 'distributor') {
				$userGroup = 'Διανομέας';
				echo "
				<img src='./icons/book.png' alt='user' title='user' style='display: block;' id='book_img_profile'/>
				";
			} else if ($row['userGroup'] == 'sectretary') {
				$userGroup = 'Γραμματεία';
				echo "
				<img src='./icons/secretary.png' alt='user' title='user' style='display: block;' id='secretary_img_profile'/>
				";
			}
		?>
			<div class="user_fields">

			<table>
				<tbody>
				<form method='post'>
				<tr>
				<td>
					<label for="new_username">Όνομα χρήστη:</label>
				</td>
				<td>
					<?php
					if (isset($_POST['edit_username'])) {		// an patithei to epeksergasia
						echo "
						<input name='new_username' placeholder='$row[username]'/>
						</td>
						<td>
							<button type='submit' name='change_username' id='change_username'>Αλλαγή</button>
						</td>
						";
					} else {
						echo "
						<p name='profile_username' id='profile_username'>$row[username]</p>
						</td>
						<td>
							<button type='submit' name='edit_username' id='edit_username'>Επεξεργασία</button>
						</td>
						";
					}
					if (isset($_POST['change_username'])) {		// an patithei to allagi
						$new_username = $_POST['new_username'];
						$query = "
						SET SQL_SAFE_UPDATES = 0;
						UPDATE user SET username = '$new_username' where email = '$row[email]';
						";
						$result_edit_username = mysqli_query($connection, $query);
					}
					?>
				</tr>

				<tr>
				<td>
					<label for="profile_email">E-mail:</label>
				</td>
				<td>
					<?php
						echo "
						<p name='profile_email' id='profile_email'>$row[email]</p>
						";
					?>
				</td>
				<td>
					<button type="submit" name="edit_email">Επεξεργασία</button>
				</td>
				</tr>

				<tr>
				<td>
					<label for="profile_userGroup">Ομάδα χρήστη:</label>
				</td>
				<td>
					<?php
						echo "
						<p name='profile_userGroup' id='profile_userGroup'>$userGroup</p>					
						";
					?>
				</td>
				<td></td>
				</tr>

				<?php

					if ($userGroup == 'Φοιτητής') {
						$query = "select * from student where user_email = '$_SESSION[user_email]'";
						$result=mysqli_query($connection,$query);
						mysqli_data_seek($result,0);
						$row = mysqli_fetch_assoc($result);

						echo "
						<div id='student_fields_for_profile'>
						
						<tr>
						<td>
							<label for='profile_university'>Πανεπιστήμιο:</label>
						</td>
						";

						if ($row['university'] == 'ekpa') {
							$row['university'] = 'ΕΚΠΑ';

							echo "
							<td>
								<p name='profile_university' id='profile_university'>$row[university]</p>
							</td>
							<td></td>
							</tr>
	
							<tr>
							<td>
								<label for='profile_department'>Τμήμα:</label>
							</td>
							";

							if ($row['department'] == 'computer') {
								$row['department'] = 'Πληροφορικής & Τηλεπικοινωνιών';
							} else if ($row['department'] == 'maths') {
								$row['department'] = 'Μαθηματικών';
							} else if ($row['department'] == 'chemistry') {
								$row['department'] = 'Χημείας';
							}

							echo "
							<td>
								<p name='profile_department' id='profile_department'>$row[department]</p>
							</td>
							<td></td>
							</tr>
							</div>
							";
						}
					} else if ($userGroup == 'Εκδότης') {
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
				</form>
				</tbody>

			</table>

			</div>

			<div class="edit_profile_button" style="display: none;">
				<a href="./edit_profile.php"><button type="button">Επεξεργασία</button></a>
			</div>

		</div>

	</div>

	<?php require_once './footer.php' ?>

    </body>
</html>