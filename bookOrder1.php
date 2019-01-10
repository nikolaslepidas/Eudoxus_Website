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

	<?php require_once './header.php'; ?>

    <?php
if (isset($_SESSION['user_email'])){    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['cancel_courses'])){
            require './mysql_connector.php';
            $file = fopen("checked_courses.txt","r");
            $checked_courses = array();
            while(! feof($file)){
                array_push($checked_courses,trim(fgets($file)));
            }
            $checked_courses_length = count($checked_courses);
    
            for ($i=0;$i<$checked_courses_length-1;$i++){
                echo $checked_courses[$i];
           /**/
                $course_info_from_db=mysqli_query($connection,"select * from course where title='$checked_courses[$i]';");
                //echo "select * from course where title='$checked_courses[$j]';";
                mysqli_data_seek($course_info_from_db,0);
                $row = mysqli_fetch_assoc($course_info_from_db);
                //echo var_dump($row);
                $query = "delete from student_has_book where student_user_email='$_SESSION[user_email]' and course_idcourse=$row[idcourse];";
                //echo $query;
                $course_deletion = mysqli_query($connection,$query);
                //echo var_dump($course_deletion);
        
            }   

            fclose($file);
            unlink('checked_courses.txt');
        }
    }else{
        if(file_exists("checked_courses.txt")){
            unlink('checked_courses.txt');
        }
    }
}else{
    echo "
    <script>
        alert('Πρέπει να συνδεθείτε πρώτα!');
        window.location = 'index.php';
    </script>    
    ";
}
?>

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
<form id="form1" class="bookForm" action="bookOrder2.php" method="post" >
    <input type="checkbox" name="grammiki_algebra" value="ΓΡΑΜΜΙΚΗ ΑΛΓΕΒΡΑ" > ΓΡΑΜΜΙΚΗ ΑΛΓΕΒΡΑ<br>
    <input type="checkbox" name="diakrita_mathimatika" value="ΔΙΑΚΡΙΤΑ ΜΑΘΗΜΑΤΙΚΑ" > ΔΙΑΚΡΙΤΑ ΜΑΘΗΜΑΤΙΚΑ<br>
    <input type="checkbox" name="eisagogi_stin_pliroforiki_kai_stis_tilepikoinonies" value="ΕΙΣΑΓΩΓΗ ΣΤΗΝ ΠΛΗΡΟΦΟΡΙΚΗ ΚΑΙ ΣΤΙΣ ΤΗΛΕΠΙΚΟΙΝΩΝΙΕΣ">  ΕΙΣΑΓΩΓΗ ΣΤΗΝ ΠΛΗΡΟΦΟΡΙΚΗ ΚΑΙ ΣΤΙΣ ΤΗΛΕΠΙΚΟΙΝΩΝΙΕΣ <br>
    <input type="checkbox" name="eisagogi_ston_programmatismo" value="ΕΙΣΑΓΩΓΗ ΣΤΟΝ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟ"> ΕΙΣΑΓΩΓΗ ΣΤΟΝ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟ<br>
    <input type="checkbox" name="logiki_sxediasi" value="ΛΟΓΙΚΗ ΣΧΕΔΙΑΣΗ" > ΛΟΓΙΚΗ ΣΧΕΔΙΑΣΗ<br>
</form>
</div>

<button class="accordion">3ο Εξάμηνο</button>
<div class="panel">
<form id="form2" class="bookForm"  >
    <input type="checkbox" name="analisi_II" value="ΑΝΑΛΥΣΗ ΙΙ" > ΑΝΑΛΥΣΗ ΙΙ<br>
    <input type="checkbox" name="vehicle2" value="ΑΝΤΙΚΕΙΜΕΝΟΣΤΡΑΦΗΣ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΣ" > ΑΝΤΙΚΕΙΜΕΝΟΣΤΡΑΦΗΣ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΣ<br>
    <input type="checkbox" name="pithanotites"  value="ΠΙΘΑΝΟΤΗΤΕΣ"> ΠΙΘΑΝΟΤΗΤΕΣ<br>
    <input type="checkbox" name="vehicle1"  value="ΣΗΜΑΤΑ ΚΑΙ ΣΥΣΤΗΜΑΤΑ"> ΣΗΜΑΤΑ ΚΑΙ ΣΥΣΤΗΜΑΤΑ<br>
    <input type="checkbox" name="ergastirio_kiklomaton"  value="ΕΡΓΑΣΤΗΡΙΟ ΚΥΚΛΩΜΑΤΩΝ"> ΕΡΓΑΣΤΗΡΙΟ ΚΥΚΛΩΜΑΤΩΝ<br>
</form>
</div>

<button class="accordion">5ο Εξάμηνο</button>
<div class="panel">
<form class="bookForm">
    <input type="checkbox" name="vehicle1" value="ΑΡΧΕΣ ΓΛΩΣΣΩΝ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΥ"> ΑΡΧΕΣ ΓΛΩΣΣΩΝ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΥ<br>
    <input type="checkbox" name="vehicle2" value="ΑΡΧΙΤΕΚΤΚΟΝΙΚΗ ΥΠΟΛΟΓΙΣΤΩΝ ΙΙ"> ΑΡΧΙΤΕΚΤΚΟΝΙΚΗ ΥΠΟΛΟΓΙΣΤΩΝ ΙΙ<br>
    <input type="checkbox" name="vehicle3" value="ΔΙΚΤΥΑ ΕΠΙΚΟΙΝΩΝΙΩΝ ΙΙ"> ΔΙΚΤΥΑ ΕΠΙΚΟΙΝΩΝΙΩΝ ΙΙ <br>
    <input type="checkbox" name="Leitourgika_Sistimata" value="ΛΕΙΤΟΥΡΓΙΚΑ ΣΥΣΤΗΜΑΤΑ"> ΛΕΙΤΟΥΡΓΙΚΑ ΣΥΣΤΗΜΑΤΑ<br>
    <input type="checkbox" name="vehicle2" value="ΕΦΑΡΜΟΣΜΕΝΑ ΜΑΘΗΜΑΤΙΚΑ"> ΕΦΑΡΜΟΣΜΕΝΑ ΜΑΘΗΜΑΤΙΚΑ<br>
    <input type="checkbox" name="vehicle3" value="ΠΑΡΑΛΛΗΛΑ ΣΥΣΤΗΜΑΤΑ"> ΠΑΡΑΛΛΗΛΑ ΣΥΣΤΗΜΑΤΑ<br>
    <input type="checkbox" name="vehicle1" value="ΣΧΕΔΙΑΣΗ ΨΗΦΙΑΚΩΝ ΣΥΣΤΗΜΑΤΩΝ-VHDL"> ΣΧΕΔΙΑΣΗ ΨΗΦΙΑΚΩΝ ΣΥΣΤΗΜΑΤΩΝ-VHDL<br>
    <input type="checkbox" name="vehicle2" value="ΤΕΧΝΗΤΗ ΝΟΗΜΟΣΥΝΗ"> ΤΕΧΝΗΤΗ ΝΟΗΜΟΣΥΝΗ<br>
    <input type="checkbox" name="vehicle3" value="ΤΗΛΕΠΙΚΟΙΝΩΝΙΑΚΑ ΔΙΚΤΥΑ"> ΤΗΛΕΠΙΚΟΙΝΩΝΙΑΚΑ ΔΙΚΤΥΑ<br>
    <input type="checkbox" name="vehicle3" value="ΨΗΦΙΑΚΗ ΕΠΕΞΕΡΓΑΣΙΑ ΣΗΜΑΤΟΣ"> ΨΗΦΙΑΚΗ ΕΠΕΞΕΡΓΑΣΙΑ ΣΗΜΑΤΟΣ<br>
    <input type="checkbox" name="vehicle1" value="ΓΡΑΦΙΚΑ Ι"> ΓΡΑΦΙΚΑ Ι<br>
    <input type="checkbox" name="vehicle2" value="ΚΥΜΑΤΑ, ΚΥΜΑΤΟΔΗΓΟΙ, ΚΕΡΑΙΕΣ"> ΚΥΜΑΤΑ, ΚΥΜΑΤΟΔΗΓΟΙ, ΚΕΡΑΙΕΣ<br>
    <input type="checkbox" name="vehicle3" value=" ΑΡΙΘΜΗΤΙΚΗ ΑΝΑΛΥΣΗ"> ΑΡΙΘΜΗΤΙΚΗ ΑΝΑΛΥΣΗ<br>
    <input type="checkbox" name="vehicle2" value="ΥΛΟΠΟΙΗΣΗ ΣΥΣΤΗΜΑΤΩΝ ΒΑΣΕΩΝ ΔΕΔΟΜΕΝΩΝ"> ΥΛΟΠΟΙΗΣΗ ΣΥΣΤΗΜΑΤΩΝ ΒΑΣΕΩΝ ΔΕΔΟΜΕΝΩΝ<br>
</form>
</div>

<button class="accordion">7ο Εξάμηνο</button>
<div class="panel">
<form class="bookForm">
    <input type="checkbox" name="vehicle3" value="ΔΟΜΗ ΚΑΙ ΘΕΣΜΟΙ ΤΗΣ ΕΥΡΩΠΑΙΚΗΣ ΕΝΩΣΗΣ" > ΔΟΜΗ ΚΑΙ ΘΕΣΜΟΙ ΤΗΣ ΕΥΡΩΠΑΙΚΗΣ ΕΝΩΣΗΣ<br>
    <input type="checkbox" name="vehicle3" value="ΟΠΤΙΚΕΣ ΕΠΙΚΟΙΝΩΝΙΕΣ ΚΑΙ ΟΠΤΙΚΑ ΔΙΚΤΥΑ"> ΟΠΤΙΚΕΣ ΕΠΙΚΟΙΝΩΝΙΕΣ ΚΑΙ ΟΠΤΙΚΑ ΔΙΚΤΥΑ<br>
    <input type="checkbox" name="vehicle1" value="ΣΥΣΤΗΜΑΤΑ ΚΙΝΗΤΩΝ ΚΑΙ ΠΡΟΣΩΠΙΚΕΣ ΕΠΙΚΟΙΝΩΝΙΕΣ"> ΣΥΣΤΗΜΑΤΑ ΚΙΝΗΤΩΝ ΚΑΙ ΠΡΟΣΩΠΙΚΕΣ ΕΠΙΚΟΙΝΩΝΙΕΣ<br>
    <input type="checkbox" name="vehicle2" value="ΨΗΦΙΑΚΕΣ ΕΠΙΚΟΙΝΩΝΙΕΣ"> ΨΗΦΙΑΚΕΣ ΕΠΙΚΟΙΝΩΝΙΕΣ<br>
    <input type="checkbox" name="vehicle3" value="ΑΝΑΠΤΥΞΗ ΛΟΓΙΣΜΙΚΟΥ ΓΙΑ ΑΛΓΟΡΙΘΜΙΚΑ ΠΡΟΒΛΗΜΑΤΑ"> ΑΝΑΠΤΥΞΗ ΛΟΓΙΣΜΙΚΟΥ ΓΙΑ ΑΛΓΟΡΙΘΜΙΚΑ ΠΡΟΒΛΗΜΑΤΑ<br>
    <input type="checkbox" name="vehicle3" value="ΕΠΙΚΟΙΝΩΝΙΑ ΑΝΘΡΩΠΟΥ ΜΗΧΑΝΗΣ"> ΕΠΙΚΟΙΝΩΝΙΑ ΑΝΘΡΩΠΟΥ ΜΗΧΑΝΗΣ<br>
    <input type="checkbox" name="vehicle1" value="ΠΛΗΡΟΦΟΡΙΚΗ ΚΑΙ ΕΚΠΑΙΔΕΥΣΗ"> ΠΛΗΡΟΦΟΡΙΚΗ ΚΑΙ ΕΚΠΑΙΔΕΥΣΗ<br>
    <input type="checkbox" name="vehicle2" value="ΠΛΗΡΟΦΟΡΙΑΚΑ ΣΥΣΤΗΜΑΤΑ"> ΠΛΗΡΟΦΟΡΙΑΚΑ ΣΥΣΤΗΜΑΤΑ<br>
    <input type="checkbox" name="vehicle3" value="ΥΠΟΛΟΓΙΣΤΙΚΗ ΠΟΛΥΠΛΟΚΟΤΗΤΑ"> ΥΠΟΛΟΓΙΣΤΙΚΗ ΠΟΛΥΠΛΟΚΟΤΗΤΑ<br>
</form>
</div>
<!-- This is not allowed in HTML5 
<a href="student.php"> <button class="next-previous-buttons" > Προηγούμενο</button> </a>
-->

<form class="button" action="student.php" method="get">
    <button class="next-previous-buttons" > Προηγούμενο</button>
</form>
<button id="button-next1" class="next-previous-buttons" form="form1" value="submit"> Επόμενο</button>
</div> 


	<?php require_once './footer.php' ?>


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

/*
submitForms = function(){
    //console.log("i am in submitForms funtion");
    //window.alert("i am in submitForms funtion");
    //document.getElementById("form2").submit();
    document.getElementById("form1").submit();
    window.location = "bookOrder2.php";
}
*/
/*
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
            alert("Asximaaaaa");
        }
      });
    window.location = "bookOrder2.php";
  });
});
*/
</script>

<?php

    require './mysql_connector.php';
    
    $student_courses="select * from student_has_book where student_user_email='$_SESSION[user_email]';";
    
    $student_has_book_info=mysqli_query($connection, $student_courses);
    //var_dump($student_has_book_info);
    mysqli_data_seek($student_has_book_info,0);
    $number_of_courses=mysqli_num_rows($student_has_book_info);
    
    for($i=0;$i<$number_of_courses;$i++){
        $record_from_student_has_book = mysqli_fetch_assoc($student_has_book_info);
        
        $course_info = "select * from course where idcourse=$record_from_student_has_book[course_idcourse];";
        $result_from_course_info=mysqli_query($connection,$course_info);
        mysqli_data_seek($result_from_course_info,0);
        $course_record=mysqli_fetch_assoc($result_from_course_info);
        
        echo "
        
        <script>
        var checkboxes = document.getElementsByTagName('input');
        var j;
        
        for (j = 0; j < checkboxes.length; j++) {
            if (checkboxes[j].value == '$course_record[title]'){
                checkboxes[j].checked=true;
                checkboxes[j].disabled=true;
            }    
        }
       </script>
        
        ";
    }
?>


        </body>
    </html>