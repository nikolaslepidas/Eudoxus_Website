<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/communication_form.css">
		<link rel="stylesheet" href="css/bookStore.css">
		<link rel="stylesheet" href="css/bookOrder.css">

		<script src="accordion.js"></script>

		<title>Εύδοξος - Διανομέας</title>

	</head>
	<body>

	<?php require_once './header.php' ?>
	
	<!-- Breadcrumb -->
	<div class="wrapper">
		<ul class="breadcrumb">
			<li><a href="index.php">Αρχική</a></li>
			<li>Διανομέας</li> 
		</ul>
	</div>

	<!-- Body of bookStore's page -->
	<div class="padding_needed_for_footer">
		
		<span class="subtitle">Λειτουργία Διανομέα</span>

		<button class="accordion">Παράδοση Συγγραμμάτων </button>
		<div class="panel">
			<p> Ο διανομέας μπορεί μέσω του Εύδοξου να επικυρώσει την παραλαβή ενός συγγράμματος από κάποιον φοιτητή. </p>
		</div>
		<br/>

		<div class="container_grid_bookStore_options">

			<button class="container_bookStore">
				<img src="./icons/book.png" alt="Διανομή συγγραμμάτων" title="Διανομή συγγραμμάτων">
				<span>Θέλω να διανείμω συγγράμματα στους φοιτητές!</span>
			</button>

			<button class="container_bookStore">
				<img src="./icons/instructions.png" alt="Οδηγίες" title="Οδηγίες">
				<span>Θέλω να μάθω πώς μπορώ να διανείμω συγγράμματα και όχι μόνο!</span>
			</button>

			<button class="container_bookStore">
				<img src="./icons/question_mark.png" alt="Συχνές ερωτήσεις" title="Συχνές ερωτήσεις">
				<span>Θέλω να ρωτήσω πως μπορώ να μοιράσω συγγράμματα μέσω του Ευδόξου!</span>
			</button>

		</div>

	</div>

	<?php require_once './footer.php' ?>

    </body>
</html>