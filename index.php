<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/home.css">

		<title>Εύδοξος - Αρχική σελίδα</title>

	</head>
	<body>

<?php 
require_once './header.php';

if(isset($_SESSION['logged_user'])){
//header("location: profile.php");
	//echo "session_logged_user_is_set";
	echo($_SESSION['logged_user']);
}	
?>
<!-- Newstable -->
<div id="right-column">
	<div id="news-table">
		<table id="newstable">
			<tr>
				<th>
					Ανακοινώσεις
				</th>
			</tr>
			<tr>
				<td><a href="#">Πρόβλημα λειτουργίας της εφαρμογής εκδοτών μέσω Mozilla Firefox.</a></td>
			</tr>
			<tr>
				<td><p>Σας ενημερώνουμε οτι λόγω απροσδόκητου προβλήματος που οφείλεται σε νεότερη έκδοση του περιηγητή Mozilla Firefox, η χρήση της ...</p></td>
			</tr>
			<tr>
				<td><a href="#">Πρόβλημα λειτουργίας της εφαρμογής εκδοτών μέσω Mozilla Firefox.</a></td>
			</tr>
			<tr>
				<td><p>Σας ενημερώνουμε οτι λόγω απροσδόκητου προβλήματος που οφείλεται σε νεότερη έκδοση του περιηγητή Mozilla Firefox, η χρήση της ...</p></td>
			</tr>
			<tr>
				<td><a href="#">Πρόβλημα λειτουργίας της εφαρμογής εκδοτών μέσω Mozilla Firefox.</a></td>
			</tr>
			<tr>
				<td><p>Σας ενημερώνουμε οτι λόγω απροσδόκητου προβλήματος που οφείλεται σε νεότερη έκδοση του περιηγητή Mozilla Firefox, η χρήση της ...</p></td>
			</tr>
			<tr>
				<td class="seemorenews"><a href="#">Περισσότερα...</a></td>
			</tr>
		</table>
	</div>	
</div>	
<!-- End of Newstable -->					

<main id="central-column">
	<div class="container_grid">
		<div class="box student">
			<img src="./icons/student.png" alt="student" title="student">
			<p>Φοιτητής</p>
		</div>
		<div class="box publisher">
			<img src="./icons/manager.png" alt="publisher" title="publisher">
			<p>Εκδότης</p>
		</div>
		<div class="box distributor">
			<img src="./icons/book.png" alt="distributor" title="distributor">
			<p>Διανομέας</p>
		</div>
		<div class="box secretariat">
			<img src="./icons/secretary.png" alt="secretariat" title="secretariat">
			<p>Γραμματεία</p>
		</div>
	</div>
</main>
<b id="logout"><a href="logout.php">Log Out</a></b>
<?php echo $_SESSION['logged_user']; ?>
<?php require_once './footer.php'  ?>

</body>
</html>
