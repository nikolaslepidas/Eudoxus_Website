<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/communication_form.css">
		<link rel="stylesheet" href="css/student.css">
		<link rel="stylesheet" href="css/bookOrder.css">

		<title>Εύδοξος - Φοιτητής</title>

	</head>
	<body>
	
	<?php require_once './header.php' ?>
	<!-- Breadcrumb -->
	<div class="wrapper">
		<ul class="breadcrumb">
			<li><a href="index.php">Αρχική</a></li>
			<li>Φοιτητής</li> 
		</ul>
	</div>

	<div class="padding_needed_for_footer">
		<span class="subtitle">Λειτουργίες Φοιτητή - Πληροφορίες</span>

		<button class="accordion">Δήλωση Συγγραμμάτων </button>
		<div class="panel">
			<p> Ο φοιτητής μπορεί να δηλώσει τα συγγράμματα που επιθυμεί να λάβει για το κάθε εξάμηνο. </p>  
			<p> Προαπαιτούμενα για δήλωση συγγραμμάτων: </p>
			<ul> 
				<li> Ο φοιτητής να μην έχει ξεπεράσει τα ν+2 έτη σπουδών. </li>
				<li> Ο φοιτητής να μην έχει ξεπεράσει τον προβλεπόμενο αριθμό συγγραμμάτων που μπορεί να λάβει. </li>
				<li> Ο φοιτητής οφείλει να δηλώσει συγγράμματα μόνο για τα αντίστοιχα μαθήματα που έχει νομίμως δηλώσει και  παρακολουθεί κατά το τρέχον εξάμηνο. </li>
				<li> Ο φοιτητής που λαμβάνει ένα σύγγραμμα για ένα μάθημα που δικαιούται δεν μπορεί να λάβει το ίδιο σύγγραμμα για άλλο μάθημα στο οποίο έχει
					οριστεί το ίδιο σύγγραμμα. </li>
			</ul>

			<p> Οι δηλώσεις μπορούν να πραγματοποιηθούν μέσα σε ένα ορισμένο χρονικό διάστημα για το οποίο βγαίνουν ανακοινώσεις στην ιστοσελίδα του Εύδοξου. </p> 
		</div>

		<button class="accordion">Ανταλλαγή Συγγραμμάτων</button>
		<div class="panel">
			<p> Ο φοιτητής έχει τη δυνατότητα να λάβει ένα σύγγραμμα από άλλον φοιτητή που το έχει ήδη. Επίσης, και ο ίδιος μπορεί να δώσει κάποιο από τα συγγράμματα που δεν χρειάζεται πια.
				Με αυτόν τον τρόπο, μπορεί να κερδίσει πόντους και όταν φτάσει κάποιο όριο πόντων δικαιούται να παραλάβει από τον Εύδοξο ένα επιπλέον σύγγραμμα από το συνολικό αριθμό 
				συγγραμμάτων που αντιστοιχούν σε κάθε φοιτητή.
			</p>
			<p> Για να μπορέσει κάποιος φοιτητής ή απόφοιτος να εγγραφεί - συνδεθεί στον Εύδοξο και να δηλώσει νέα ή να ανταλλάξει παλαιότερα συγγράμματα 
					αρκεί να πληρεί τις προϋποθέσεις για τη δήλωση συγγραμμάτων. </p> 
		</div>

		<button class="accordion">Σημειώσεις και Βοηθήματα </button>
		<div class="panel">
			<p> Ο φοιτητής μπορεί να έχει πρόσβαση σε σημειώσεις και βοηθήματα που αναρτώνται στον Εύδοξο και να αναρτήσει ο ίδιος δικές του σημειώσεις.  </p>
		</div>
		<br/>

		<div class="container_grid_student_options">

			<form method="post" action="./bookOrder1.php">
				<button class="container_student" type="submit" name="myOrder">
					<img src="./icons/dhlwsi.png" alt="Δήλωση συγγραμμάτων" title="Δήλωση συγγραμμάτων">
					<span>Θέλω να πάρω συγγράμματα μέσω νέας δήλωσης!</span>
				</button>
			</form>

			<form method="post" action="./myBooks.php">
				<button class="container_student" type="submit" name="myBooks">
					<img src="./icons/books-stack-of-three.png" alt="Δηλωθέντα συγγράμματα" title="Δηλωθέντα συγγράμματα">
					<span>Θέλω να δω τα συγγράμματα που έχω ήδη δηλώσει!</span>
				</button>
			</form>

			<button class="container_student">
				<img src="./icons/exchange_book.png" alt="Ανταλλαγή συγγραμμάτων" title="Ανταλλαγή συγγραμμάτων">
				<span>Θέλω να πάρω συγγράμματα μέσω ανταλλαγής!</span>
			</button>

			<button class="container_student">
				<img src="./icons/product.png" alt="Διάθεση σημειώσεων/βοηθημάτων" title="Διάθεση σημειώσεων/βοηθημάτων">
				<span>Θέλω να διαθέσω δωρεάν σημειώσεις/βοηθήματα!</span>
			</button>

			<button class="container_student">
				<img src="./icons/instructions.png" alt="Οδηγίες" title="Οδηγίες">
				<span>Θέλω να μάθω πώς μπορώ να δηλώσω συγγράμματα και όχι μόνο!</span>
			</button>

			<button class="container_student">
				<img src="./icons/question_mark.png" alt="Συχνές ερωτήσεις" title="Συχνές ερωτήσεις">
				<span>Θέλω να ρωτήσω πως μπορώ να ανταλλάξω συγγράμματα!</span>
			</button>

		</div>

	</div>

	<?php require_once './footer.php' ?>

    </body>
</html>

<script src="./accordion.js"></script>