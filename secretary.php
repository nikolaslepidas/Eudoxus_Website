<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/communication_form.css">
		<link rel="stylesheet" href="css/secretary.css">
		<link rel="stylesheet" href="css/bookOrder.css">

		<title>Εύδοξος - Γραμματεία</title>

	</head>
	<body>

	<?php require_once './header.php' ?>
	<div class="wrapper">
		<ul class="breadcrumb">
			<li><a href="index.php">Αρχική</a></li>
			<li>Γραμματεία</li> 
		</ul>
	</div>



<div class="padding_needed_for_footer">
	<h2> Λειτουργίες Γραμματείας - Πληροφορίες </h2>

	<button class="accordion">Εισαγωγή Προγράμματος Σπουδών </button>
	<div class="panel">
	<p> Ο φοιτητής μπορεί να δηλώσει τα συγγράμματα που επιθυμεί να λάβει για το κάθε εξάμηνο.  </p>
	</div>

	<button class="accordion">Εισαγωγή Προτεινόμενων Συγγραμμάτων</button>
	<div class="panel">
	<p> Ο φοιτητής έχει τη δυνατότητα να λάβει ένα σύγγραμμα από άλλον φοιτητή που το έχει ήδη καθώς επίσης και ο ίδιος να δώσει κάποιο από τα συγγράμματα που δεν χρειάζεται πια.
		Με αυτόν τον τρόπο μπορεί να κερδίσει πόντους και όταν φτάσει κάποιο όριο πόντων δικαιούται να παραλάβει από τον Εύδοξο ένα επιπλέον σύγγραμμα από το συνολικό αριθμό 
		συγγραμμάτων που αντιστοιχούν σε κάθε φοιτητή.
	</p>
	</div>
	<br/>

	<div class="container_grid_secretary_options">
		<button class="container_secretary">
			<img src="./icons/computer.png" alt="Ανταλλαγή συγγραμμάτων" title="Ανταλλαγή συγγραμμάτων">
			<span>Θέλω να εισάγω το πρόγραμμα σπουδών!</span>
		</button>

		<button class="container_secretary">
			<img src="./icons/computer.png" alt="Διάθεση σημειώσεων/βοηθημάτων" title="Διάθεση σημειώσεων/βοηθημάτων">
			<span>Θέλω να εισάγω τα προτεινόμενα συγγράμματα!</span>
		</button>

		<button class="container_secretary">
			<img src="./icons/instructions.png" alt="Οδηγίες" title="Οδηγίες">
			<span>Θέλω να μάθω πώς μπορώ να εισάγω συγγράμματα και όχι μόνο!</span>
		</button>

		<button class="container_secretary">
			<img src="./icons/question_mark.png" alt="Συχνές ερωτήσεις" title="Συχνές ερωτήσεις">
			<span>Θέλω να ρωτήσω πως μπορώ να εισάγω το πρόγραμμα σπουδών!</span>
		</button>
	</div>

</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

	<?php require_once './footer.php' ?>

    </body>
</html>