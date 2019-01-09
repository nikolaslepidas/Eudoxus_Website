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

        for ($j=0;$j<$checked_courses_length;$j++){
            echo $checked_courses[$j];
            echo "~";
            require_once './mysql_connector.php';
            
            $course_info_from_db=mysqli_query($connection,"select * from course where title='$checked_courses[$j]';");
            echo "select * from course where title='$checked_courses[$j]';";
            mysqli_data_seek($course_info_from_db,0);
            $row = mysqli_fetch_assoc($course_info_from_db);
            $query="select * from book, course_has_book, course where isbn=book_isbn and course_idcourse=$row[idcourse];";
            echo $query;
            $books_for_course=mysqli_query($connection,$query);
            mysqli_data_seek($books_for_course,0);
            $row = mysqli_fetch_assoc($books_for_course);
            echo var_dump($row);
        }
    }else{
        echo "no post request got here";
        echo var_dump($_POST);
    }
?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/communication_form.css">

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


	<?php require_once './footer.php' ?>

    </body>
</html>