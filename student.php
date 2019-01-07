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
	<div class="wrapper">
		<ul class="breadcrumb">
			<li><a href="index.php">Αρχική</a></li>
			<li>Φοιτητής</li> 
		</ul>
	</div>



<div class="padding_needed_for_footer">
	<h2> Λειτουργίες Φοιτητή - Πληροφορίες</h2>

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

	<div class="container_grid_student_options">

	<div class="container_student student_dhlwsi">
		<a href="./bookOrder1.php"><img src="./icons/dhlwsi.png" alt="Δήλωση συγγραμμάτων" title="Δήλωση συγγραμμάτων"></a>
		<span>Θέλω να πάρω συγγράμματα μέσω νέας δήλωσης!</span>
	</div>

	<div class="container_student student_antallagi">
	<a href="#"><img src="./icons/exchange_book.png" alt="Ανταλλαγή συγγραμμάτων" title="Ανταλλαγή συγγραμμάτων"></a>
		<span>Θέλω να πάρω συγγράμματα μέσω ανταλλαγής!</span>
	</div>

	<div class="container_student student_dwrean_syggrammata">
	<a href="#"><img src="./icons/product.png" alt="Διάθεση σημειώσεων/βοηθημάτων" title="Διάθεση σημειώσεων/βοηθημάτων"></a>
		<span>Θέλω να διαθέσω δωρεάν σημειώσεις/βοηθήματα!</span>
	</div>

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