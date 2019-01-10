<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/communication_form.css">
		<link rel="stylesheet" href="css/publisher.css">
		<link rel="stylesheet" href="css/bookOrder.css">

		<title>Εύδοξος - Εκδότης</title>

	</head>
	<body>

	<?php require_once './header.php' ?>
	<div class="wrapper">
		<ul class="breadcrumb">
			<li><a href="index.php">Αρχική</a></li>
			<li>Εκδότης</li> 
		</ul>
	</div>

<div class="padding_needed_for_footer">
<span class="subtitle">Λειτουργία Εκδότη</span>

	<button class="accordion">Διανομή Συγγραμμάτων </button>
	<div class="panel">
		<p> Ο υπεύθυνος του εκδοτικού οίκου ή ο αυτοεκδότης μπορεί μέσω του Εύδοξου να αντιστοιχίσει τα συγγράμματα σε σημεία διανομής. </p>
	</div>
	<br/>

	<div class="container_grid_publisher_options">

		<button class="container_publisher">
			<img src="./icons/delivery-van.png" alt="Διανομή συγγραμμάτων" title="Διανομή συγγραμμάτων">
			<span>Θέλω να διανείμω συγγράμματα στα σημεία διανομής!</span>
		</button>

		<button class="container_publisher">
			<img src="./icons/instructions.png" alt="Οδηγίες" title="Οδηγίες">
			<span>Θέλω να μάθω πώς μπορώ να διανείμω συγγράμματα και όχι μόνο!</span>
		</button>

		<button class="container_publisher">
			<img src="./icons/question_mark.png" alt="Συχνές ερωτήσεις" title="Συχνές ερωτήσεις">
			<span>Θέλω να ρωτήσω πως μπορώ να διανείμω συγγράμματα μέσω του Ευδόξου!</span>
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