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
	<!-- Breadcrumb -->
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
			$error = "";

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

				<!-- Change username -->
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
						if (isset($_POST['change_username'])) {		// an patithei to allagi
							$new_username = $_POST['new_username'];
							if (strcmp($new_username,"")){
								//$query0 = "SET SQL_SAFE_UPDATES = 0;";
								$query_update_username = " update user set username = '$new_username' where email = '$row[email]'; ";
								mysqli_query($connection, $query_update_username);
								$query_get_all_data = "select * from user where email = '$row[email]';";
								$result_edit_username = mysqli_query($connection, $query_get_all_data);
								mysqli_data_seek($result_edit_username,0);
								$row = mysqli_fetch_assoc($result_edit_username);	
								$_SESSION['logged_user'] = $new_username;
								header("Refresh:0");
							}
							else{
								$error = "Μη αποδεκτό όνομα χρήστη.";	
							}
						}
						echo "
						<p name='profile_username' id='profile_username'>$row[username]</p>
						</td>
						<td>
							<button type='submit' name='edit_username' id='edit_username'>Επεξεργασία</button>
						</td>
						";
					}
					?>
				</tr>

				<!-- Change email -->
				<tr>
				<td>
					<label for="profile_email">E-mail:</label>
				</td>
				<td>
				<?php	
					if (isset($_POST['edit_email'])) {		// an patithei to epeksergasia
						echo "
						<input name='new_email_from_input' placeholder='$row[email]'/>
						</td>
						<td>
							<button type='submit' name='change_email' id='change_email'>Αλλαγή</button>
						</td>
						";
					} else {
						if (isset($_POST['change_email'])) {
							$new_email = $_POST['new_email_from_input'];
							if (strcmp($new_email,"")){
								$query_for_unique_email	= "select * from user where email = '$new_email';" ;
								$results_for_unique_email = mysqli_query($connection, $query_for_unique_email);
								mysqli_data_seek($results_for_unique_email, 0);
								if (mysqli_num_rows($results_for_unique_email) == 0){

									if (!strcmp($row['userGroup'],"student")){
										mysqli_query($connection, "SET FOREIGN_KEY_CHECKS=0;");
										$query_update_user_email = " update student set user_email = '$new_email' where user_email = '$row[email]'; ";
										mysqli_query($connection, $query_update_user_email);
										$query_update_email = "update user set email = '$new_email' where email = '$row[email]';";
										$result_edit_email = mysqli_query($connection, $query_update_email);
										mysqli_query($connection, "SET FOREIGN_KEY_CHECKS=1;");

									}elseif (!strcmp($row['userGroup'],"publisher")){
										mysqli_query($connection, "SET FOREIGN_KEY_CHECKS=0;");
										$query_update_user_email = " update publisher set user_email = '$new_email' where user_email = '$row[email]'; ";
										mysqli_query($connection, $query_update_user_email);
										$query_update_email = "update user set email = '$new_email' where email = '$row[email]';";
										$result_edit_email = mysqli_query($connection, $query_update_email);
										mysqli_query($connection, "SET FOREIGN_KEY_CHECKS=1;");
									}

									$query_get_all_data= "select * from user where email='$new_email'";
									$new_result = mysqli_query($connection, $query_get_all_data);
									mysqli_data_seek($new_result,0);
									$row = mysqli_fetch_assoc($new_result);	
									$_SESSION['user_email'] = $new_email;

								}else{
									$error = "Το email χρησιμοποιείται ήδη.";
								}
								
							}
							else{
								$error = "Μη αποδεκτό email.";	
							}
						}
						echo "
						<p name='profile_email' id='profile_email'>$row[email]</p>
						</td>
						<td>
							<button type='submit' name='edit_email' id='edit_email'>Επεξεργασία</button>
						</td>
						";
					}
					?>
				</tr>

				<!-- Change password -->
				<tr>
					<?php	
					if (isset($_POST['edit_password'])) {
						echo "
						<td>
							<label for='old_password'>Συνθηματικό χρήστη:</label>
						</td>
						<td>
							<input name='old_password' placeholder='Εισάγετε τον τωρινό κωδικό'/>
						</td>
						<td></td>
						</tr>

						<tr>
						<td>
							<label for'new_password'>Νέο Συνθηματικό χρήστη:</label>
						</td>
						<td>
							<input name='new_password' placeholder='Εισάγετε τον νέο κωδικό'/>
						</td>
						<td>
							<button type='submit' name='change_password' id='change_password'>Αλλαγή</button>
						</td>
						";
					} else {
						if (isset($_POST['change_password'])) {
							$old_password = $_POST['old_password'];
							$new_password = $_POST['new_password'];
							if (strcmp($new_password,"") || strcmp($old_password,"")) {
								$query_update_user_password = "update user set password = '$new_password' where email = '$row[email]' && password = '$old_password';";
								$result_edit_password = mysqli_query($connection, $query_update_user_password);
								// when update sql query succeeds it returns the number of the affected rows so 
								// we see how many are the affected rows in order to understand if update succeeded
								// or not
								if (mysqli_affected_rows($connection) == 0) {	
									$error = "Έλεξγε τον τωρινό κωδικό που πληκτρολόγησες.";
								} else {
									$query_get_all_data= "select * from user where email='$row[email]'";
									$new_result = mysqli_query($connection, $query_get_all_data);
									mysqli_data_seek($new_result,0);
									$row = mysqli_fetch_assoc($new_result);	
								}
							}
							else{
								$error = "Μη αποδεκτός κωδικός.";	
							}
						}
						echo "
						<td>
							<label for='profile_password'>Συνθηματικό χρήστη:</label>
						</td>
						<td>
							<p type='password' name='profile_password' id='profile_password'>********</p>
						</td>
						<td>
							<button type='submit' name='edit_password' id='edit_password'>Επεξεργασία</button>
						</td>
						";
					}
					?>
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
						$query = "select * from student where user_email = '$row[email]'";
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
							</div>";
						}
					} else if ($userGroup == 'Εκδότης') {
						$query = "select * from publisher where user_email = '$_SESSION[user_email]';";
						$result=mysqli_query($connection,$query);
						mysqli_data_seek($result,0);
						$row = mysqli_fetch_assoc($result);

						echo "
						<div id='publisher_fields_for_profile'>
	
						<tr>
						<td>
							<label for='profile_publisher_name'>Όνομα εκδοτικού οίκου:</label>
						</td>
						<td>";

						// Change branch name
						if (isset($_POST['edit_brand_name'])) {
							echo "
							<input name='new_brand_name' placeholder='$row[brand_name]'/>
							</td>
							<td>
								<button type='submit' name='change_brand_name' id='change_brand_name'>Αλλαγή</button>
							</td>
							</tr>
							";
						} else {
							if (isset($_POST['change_brand_name'])) {
								$new_brand_name = $_POST['new_brand_name'];
								if (strcmp($new_brand_name,"")){
									$query_update_brand_name = "update publisher set brand_name = '$new_brand_name' where user_email = '$row[user_email]';";
									$result_edit_brand_name = mysqli_query($connection, $query_update_brand_name);

									if ($result_edit_brand_name === false) {
										$error = "Ουπς! Κάτι πήγε λάθος με τη βάση δεδομένων!";
									} else {	
										// Get all changes
										$query_get_all_data= "select * from publisher where user_email = '$row[user_email]';";
										$new_result = mysqli_query($connection, $query_get_all_data);
										mysqli_data_seek($new_result,0);
										$row = mysqli_fetch_assoc($new_result);	
									}
								}
								else{
									$error = "Μη αποδεκτό όνομα εκδοτικού οίκου.";	
								}
							}
							echo "
								<p name='profile_publisher_name' id='profile_publisher_name'>$row[brand_name]</p>
							</td>
							<td>
								<button type='submit' name='edit_brand_name' id='edit_brand_name'>Επεξεργασία</button>
							</td>
							</tr>
							";
						}

						echo "
						<tr>
						<td>
							<label for='profile_publisher_city'>Πόλη εκδοτικού οίκου:</label>
						</td>
						<td>";

						// Change city
						if (isset($_POST['edit_city'])) {
							echo "
							<input name='new_city' placeholder='$row[city]'/>
							</td>
							<td>
								<button type='submit' name='change_city' id='change_city'>Αλλαγή</button>
							</td>
							</tr>
							";
						} else {
							if (isset($_POST['change_city'])) {
								$new_city = $_POST['new_city'];
								if (strcmp($new_city,"")){
									$query_update_city = "update publisher set city = '$new_city' where user_email = '$row[user_email]';";
									$result_edit_city = mysqli_query($connection, $query_update_city);

									if ($result_edit_city === false) {
										$error = "Ουπς! Κάτι πήγε λάθος με τη βάση δεδομένων!";
									} else {	
										// Get all changes
										$query_get_all_data= "select * from publisher where user_email = '$row[user_email]';";
										$new_result = mysqli_query($connection, $query_get_all_data);
										mysqli_data_seek($new_result,0);
										$row = mysqli_fetch_assoc($new_result);	
									}
								}
								else{
									$error = "Μη αποδεκτό όνομα πόλης.";
								}
							}
							echo "
								<p name='profile_publisher_city' id='profile_publisher_city'>$row[city]</p>
							</td>
							<td>
								<button type='submit' name='edit_city' id='edit_city'>Επεξεργασία</button>
							</td>
							</tr>
							";
						}

						echo "
						<tr>
						<td>
							<label for='profile_publisher_phone'>Τηλέφωνο εκδοτικού οίκου:</label>
						</td>
						<td>";

						// Change phone
						if (isset($_POST['edit_phone'])) {
							echo "
							<input name='new_phone' placeholder='$row[phone]'/>
							</td>
							<td>
								<button type='submit' name='change_phone' id='change_phone'>Αλλαγή</button>
							</td>
							</tr>
							";
						} else {
							if (isset($_POST['change_phone'])) {
								$new_phone = $_POST['new_phone'];
								if (strcmp($new_phone,"")){
									$query_update_phone = "update publisher set phone = '$new_phone' where user_email = '$row[user_email]';";
									$result_edit_phone = mysqli_query($connection, $query_update_phone);

									if ($result_edit_phone === false) {
										$error = "Ουπς! Κάτι πήγε λάθος με τη βάση δεδομένων!";
									} else {	
										// Get all changes
										$query_get_all_data= "select * from publisher where user_email = '$row[user_email]';";
										$new_result = mysqli_query($connection, $query_get_all_data);
										mysqli_data_seek($new_result,0);
										$row = mysqli_fetch_assoc($new_result);	
									}
								}
								else {
									$error = "Μη αποδεκτός αριθμός τηλεφώνου.";
								}
							}
							echo "
								<p name='profile_publisher_phone' id='profile_publisher_phone'>$row[phone]</p>
							</td>
							<td>
								<button type='submit' name='edit_phone' id='edit_phone'>Επεξεργασία</button>
							</td>
							</tr>
							</div>
							";
						}
					}
				?>
				</form>
				</tbody>

			</table>

			<?php
			if ($error != "") {
				echo "<label id='edit_problem' style='color:red; font-size: 0.9em;'>$error</label>";
			}
			?>

			</div>

		</div>

	</div>

	<?php require_once './footer.php' ?>

    </body>
</html>