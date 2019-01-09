<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/communication_form.css">
        <link rel="stylesheet" href="css/bookOrder.css">

		<title>Εύδοξος - Δήλωση συγγραμμάτων</title>

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
			<li>Δήλωση συγγραμμάτων</li> 
		</ul>
	</div>


    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $courses = array("grammiki_algebra","diakrita_mathimatika","eisagogi_stin_pliroforiki_kai_stis_tilepikoinonies","eisagogi_ston_programmatismo","logiki_sxediasi");
        $courses_length = count($courses);
        $checked_courses = array();

        for ($i=0;$i<$courses_length;$i++){
            if (isset($_POST[$courses[$i]])){
                array_push($checked_courses,$_POST[$courses[$i]]);
            }
        }
        $checked_courses_length = count($checked_courses);

        echo "
            <div class='padding_needed_for_footer'>
            ";
        for ($j=0;$j<$checked_courses_length;$j++){
            //echo $checked_courses[$j];
            //echo "~";
            require_once './mysql_connector.php';
            
            $course_info_from_db=mysqli_query($connection,"select * from course where title='$checked_courses[$j]';");
            //echo "select * from course where title='$checked_courses[$j]';";
            mysqli_data_seek($course_info_from_db,0);
            $row = mysqli_fetch_assoc($course_info_from_db);

            //now we have to match this course with the student
            $insertion=mysqli_query($connection,"insert into student_has_course values ('$_SESSION[user_email]',$row[idcourse]);");
            echo var_dump($insertion);
            $query="select * from book, course_has_book, course where isbn=book_isbn and course_idcourse=idcourse and idcourse=$row[idcourse];";
            //echo $query;
            $books_for_course=mysqli_query($connection,$query);
            mysqli_data_seek($books_for_course,0);
            //echo $checked_courses_length;
            //echo var_dump($books_for_course);
            $count = mysqli_num_rows($books_for_course);
            //$row = mysqli_fetch_assoc($books_for_course);
            
            //if ($j == 0){
                echo "
                <button class='accordion'>$checked_courses[$j]</button>
                <div class='panel'>
                <form id='form1' class='bookForm' action='bookOrder3.php' method='post' >
                ";
                for($i=0;$i<$count;$i++){
                    $row = mysqli_fetch_assoc($books_for_course);
                    echo "
                        <input type='radio' name='$row[greeklishTitle]' value='$row[bookTitle]' >$row[bookTitle]<br>
                    ";
                }
                echo "
                    </form>
                    </div>
                    
                ";
            //}

        }
            echo "
            <form class='button' action='bookOrder1.php' method='get'>
            <button class='next-previous-buttons' > Ακύρωση</button>
            </form>
                    <button id='button-next1' class='next-previous-buttons' form='form1' value='submit'> Οριστικοποίηση</button>
                    </div> <!-- end of testara-->
            ";

    }else{
        echo "no post request got here";
        echo var_dump($_POST);
    }
?>

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
</script>