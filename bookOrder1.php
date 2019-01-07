<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/communication_form.css">
        <link rel="stylesheet" href="css/bookOrder.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <title>Εύδοξος - Δήλωση συγγραμμάτων</title>

	</head>
	<body>

	<?php require_once './header.php' ?>
	<div class="wrapper">
		<ul class="breadcrumb">
			<li><a href="index.php">Αρχική</a></li>
            <li><a href="student.php">Φοιτητής</a></li>
			<li>Δήλωση συγγραμμάτων</li> 
		</ul>
	</div>
<div class="padding_needed_for_footer">
<button class="accordion">1ο Εξάμηνο</button>
<div class="panel">
<form id="form1" class="bookForm"  >
    <input type="checkbox" name="Grammiki_Algebra" value="ΓΡΑΜΜΙΚΗ ΑΛΓΕΒΡΑ" checked> ΓΡΑΜΜΙΚΗ ΑΛΓΕΒΡΑ<br>
    <input type="checkbox" name="Diakrita_Mathimatika" value="ΔΙΑΚΡΙΤΑ ΜΑΘΗΜΑΤΙΚΑ" > ΔΙΑΚΡΙΤΑ ΜΑΘΗΜΑΤΙΚΑ<br>
    <input type="checkbox" name="vehicle3" value="ΕΙΣΑΓΩΓΗ ΣΤΗΝ ΠΛΗΡΟΦΟΡΙΚΗ ΚΑΙ ΣΤΙΣ ΤΗΛΕΠΙΚΟΙΝΩΝΙΕΣ">  ΕΙΣΑΓΩΓΗ ΣΤΗΝ ΠΛΗΡΟΦΟΡΙΚΗ ΚΑΙ ΣΤΙΣ ΤΗΛΕΠΙΚΟΙΝΩΝΙΕΣ <br>
    <input type="checkbox" name="vehicle1" value="ΕΙΣΑΓΩΓΗ ΣΤΟΝ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟ"> ΕΙΣΑΓΩΓΗ ΣΤΟΝ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟ<br>
    <input type="checkbox" name="Logiki_Sxediasi" value="ΛΟΓΙΚΗ ΣΧΕΔΙΑΣΗ" > ΛΟΓΙΚΗ ΣΧΕΔΙΑΣΗ<br>
    <input type="checkbox" name="vehicle3" value="ΕΡΓΑΣΤΗΡΙΟ ΛΟΓΙΚΗΣ ΣΧΕΔΙΑΣΗΣ"> ΕΡΓΑΣΤΗΡΙΟ ΛΟΓΙΚΗΣ ΣΧΕΔΙΑΣΗΣ<br>
</form>
</div>

<button class="accordion">3ο Εξάμηνο</button>
<div class="panel">
<form id="form2" class="bookForm"  >
    <input type="checkbox" name="Analisi_II" value="ΑΝΑΛΥΣΗ ΙΙ" > ΑΝΑΛΥΣΗ ΙΙ<br>
    <input type="checkbox" name="vehicle2"  > ΑΝΤΙΚΕΙΜΕΝΟΣΤΡΑΦΗΣ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΣ<br>
    <input type="checkbox" name="Pithanotites"  > ΠΙΘΑΝΟΤΗΤΕΣ<br>
    <input type="checkbox" name="vehicle1"  > ΣΗΜΑΤΑ ΚΑΙ ΣΥΣΤΗΜΑΤΑ<br>
    <input type="checkbox" name="Ergastirio_Kiklomaton"  > ΕΡΓΑΣΤΗΡΙΟ ΚΥΚΛΩΜΑΤΩΝ<br>
</form>
</div>

<button class="accordion">5ο Εξάμηνο</button>
<div class="panel">
<form class="bookForm">
    <input type="checkbox" name="vehicle1" > ΑΡΧΕΣ ΓΛΩΣΣΩΝ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΥ<br>
    <input type="checkbox" name="vehicle2" > ΑΡΧΙΤΕΚΤΚΟΝΙΚΗ ΥΠΟΛΟΓΙΣΤΩΝ ΙΙ<br>
    <input type="checkbox" name="vehicle3" > ΔΙΚΤΥΑ ΕΠΙΚΟΙΝΩΝΙΩΝ ΙΙ <br>
    <input type="checkbox" name="Leitourgika_Sistimata" > ΛΕΙΤΟΥΡΓΙΚΑ ΣΥΣΤΗΜΑΤΑ<br>
    <input type="checkbox" name="vehicle2" > ΕΦΑΡΜΟΣΜΕΝΑ ΜΑΘΗΜΑΤΙΚΑ<br>
    <input type="checkbox" name="vehicle3" > ΠΑΡΑΛΛΗΛΑ ΣΥΣΤΗΜΑΤΑ<br>
    <input type="checkbox" name="vehicle1" > ΣΧΕΔΙΑΣΗ ΨΗΦΙΑΚΩΝ ΣΥΣΤΗΜΑΤΩΝ-VHDL<br>
    <input type="checkbox" name="vehicle2" > ΤΕΧΝΗΤΗ ΝΟΗΜΟΣΥΝΗ<br>
    <input type="checkbox" name="vehicle3" > ΤΗΛΕΠΙΚΟΙΝΩΝΙΑΚΑ ΔΙΚΤΥΑ<br>
    <input type="checkbox" name="vehicle3" > ΨΗΦΙΑΚΗ ΕΠΕΞΕΡΓΑΣΙΑ ΣΗΜΑΤΟΣ<br>
    <input type="checkbox" name="vehicle1" > ΓΡΑΦΙΚΑ Ι<br>
    <input type="checkbox" name="vehicle2" > ΚΥΜΑΤΑ, ΚΥΜΑΤΟΔΗΓΟΙ, ΚΕΡΑΙΕΣ<br>
    <input type="checkbox" name="vehicle3" > ΑΡΙΘΜΗΤΙΚΗ ΑΝΑΛΥΣΗ<br>
    <input type="checkbox" name="vehicle2" > ΥΛΟΠΟΙΗΣΗ ΣΥΣΤΗΜΑΤΩΝ ΒΑΣΕΩΝ ΔΕΔΟΜΕΝΩΝ<br>
</form>
</div>

<button class="accordion">7ο Εξάμηνο</button>
<div class="panel">
<form class="bookForm">
    <input type="checkbox" name="vehicle3" > ΔΟΜΗ ΚΑΙ ΘΕΣΜΟΙ ΤΗς ΕΥΡΩΠΑΙΚΗΣ ΕΝΩΣΗΣ<br>
    <input type="checkbox" name="vehicle3" > ΟΠΤΙΚΕΣ ΕΠΙΚΟΙΝΩΝΙΕΣ ΚΑΙ ΟΠΤΙΚΑ ΔΙΚΤΥΑ<br>
    <input type="checkbox" name="vehicle1" > ΣΥΣΤΗΜΑΤΑ ΚΙΝΗΤΩΝ ΚΑΙ ΠΡΟΣΩΠΙΚΕΣ ΕΠΙΚΟΙΝΩΝΙΕΣ<br>
    <input type="checkbox" name="vehicle2" > ΨΗΦΙΑΚΕΣ ΕΠΙΚΟΙΝΩΝΙΕΣ<br>
    <input type="checkbox" name="vehicle3" > ΑΝΑΠΤΥΞΗ ΛΟΓΙΣΜΙΚΟΥ ΓΙΑ ΑΛΓΟΡΙΘΜΙΚΑ ΠΡΟΒΛΗΜΑΤΑ<br>
    <input type="checkbox" name="vehicle3" > ΕΠΙΚΟΙΝΩΝΙΑ ΑΝΘΡΩΠΟΥ ΜΗΧΑΝΗΣ<br>
    <input type="checkbox" name="vehicle1" > ΠΛΗΡΟΦΟΡΙΚΗ ΚΑΙ ΕΚΠΑΙΔΕΥΣΗ<br>
    <input type="checkbox" name="vehicle2" > ΠΛΗΡΟΦΟΡΙΑΚΑ ΣΥΣΤΗΜΑΤΑ<br>
    <input type="checkbox" name="vehicle3" > ΥΠΟΛΟΓΙΣΤΙΚΗ ΠΟΛΥΠΛΟΚΟΤΗΤΑ<br>
</form>
</div>
<!-- This is not allowed in HTML5 
<a href="student.php"> <button class="next-previous-buttons" > Προηγούμενο</button> </a>
-->

<form class="button" action="student.php" method="get">
    <button class="next-previous-buttons" > Προηγούμενο</button>
</form>
<!--
<form class="button" action="bookOrder2.php" method="get">
    <button class="next-previous-buttons" type="submit" > Επόμενο</button>
</form>-->
<button id="button-next1" class="next-previous-buttons" > Επόμενο</button>
</div> <!-- end of testara-->


	<?php require_once './footer.php' ?>

    </body>
</html>


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
submitForms = function(){
    console.log("i am in submitForms funtion");
    window.alert("i am in submitForms funtion");
    document.getElementById("form2").submit();
    document.getElementById("form1").submit();
}

$(function(){
    $("#button-next1").on("click", function(){
      var data1 = $("#form1").serialize() + "&" + $("#form2").serialize();
      $.ajax({
        url  : './bookOrder2.php',
        method : "post",
        data : data1,
        success : function(){
          alert("Teleiaaaaaa");
        },
        error: function(){
            alert("skataaaaa");
        }
      });
    window.location = "bookOrder2.php";
  });


});


</script>

</body>
</html>
