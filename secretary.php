<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/communication_form.css">
		<link rel="stylesheet" href="css/student.css">
		<link rel="stylesheet" href="css/bookOrder.css">

		<title>Εύδοξος - Γραμματεία</title>

	</head>
	<body>

	<?php require_once './header.php' ?>
	<div class="wrapper">
		<ul class="breadcrumb">
			<li><a href="index.php">Αρχική</a></li>
			<!--
			<li><a href="#">Page2</a></li>
			<li><a href="#">Page3</a></li>
			-->
			<li>Γραμματεία</li> 
		</ul>
	</div>



<div class="testara">
<h2> Βασικές Λειτουργίες Γραμματείας </h2>

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