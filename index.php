<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/index.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<title>Εύδοξος - Αρχική σελίδα</title>

	</head>
	<body>

	<?php 
		require_once './header.php';
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
					<td><a href="#">Παράταση Περιόδου Δηλώσεων και Διανομής Συγγραμμάτων.</a></td>
				</tr>
				<tr>
					<td><p>Το έγγραφο του Υπουργείου Παιδείας, Έρευνας και Θρησκευμάτων με θέμα την παράταση της περιόδου δήλωσης ...</p></td>
				</tr>
				<tr>
					<td><a href="#">Πρόβλημα λειτουργίας της εφαρμογής εκδοτών μέσω Mozilla Firefox.</a></td>
				</tr>
				<tr>
					<td><p>Σας ενημερώνουμε οτι λόγω απροσδόκητου προβλήματος που οφείλεται σε νεότερη έκδοση του περιηγητή Mozilla Firefox, η χρήση της ...</p></td>
				</tr>
				<tr>
					<td><a href="#">Έναρξη Δήλωσης και Διανομής Συγγραμμάτων Χειμερινής Περιόδου 2018-19.</a></td>
				</tr>
				<tr>
					<td><p>Το έγγραφο του Υπουργείου Παιδείας, Έρευνας και Θρησκευμάτων σχετικά με την έναρξη των δηλώσεων και της διανομής συγγραμμάτων ...</p></td>
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

			<form method="post" action="student.php">
			<button type="submit" class="box">
				<img src="./icons/student.png" alt="student" title="student">
				<span>Φοιτητής</span>
			</button>
			</form>

			<form method="post" action="publisher.php">
			<button type="submit" class="box">
				<img src="./icons/manager.png" alt="publisher" title="publisher">
				<span>Εκδότης</span>
			</button>
			</form>

			<form method="post" action="bookStore.php">
			<button type="submit" class="box">
				<img src="./icons/book.png" alt="distributor" title="distributor">
				<span>Διανομέας</span>
			</button>
			</form>

			<form method="post" action="secretary.php">
			<button type="submit" class="box">
				<img src="./icons/secretary.png" alt="secretariat" title="secretariat">
				<span>Γραμματεία</span>
			</button>
			</form>

		</div>
	</main>

	<?php require_once './footer.php'  ?>

	</body>
</html>
