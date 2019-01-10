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
  //echo "Current PHP version: " . phpversion(); //7.3.0
if (isset($_SESSION['user_email'])){
  
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['myBooks'])){
            require_once './mysql_connector.php';

            $student_courses="select * from student_has_book where student_user_email='$_SESSION[user_email]';";

            $student_has_book_info=mysqli_query($connection, $student_courses);
            var_dump($student_has_book_info);
            mysqli_data_seek($student_has_book_info,0);
            $number_of_courses=mysqli_num_rows($student_has_book_info);
            for($i=0;$i<$number_of_courses;$i++){
                $record_from_student_has_book = mysqli_fetch_assoc($student_has_book_info);

                $book_info = "select * from book where isbn=$record_from_student_has_book[book_isbn];";
                $result_from_book_info=mysqli_query($connection,$book_info);
                mysqli_data_seek($result_from_book_info,0);
                $book_record=mysqli_fetch_assoc($result_from_book_info);
                
                $course_info = "select * from course where idcourse=$record_from_student_has_book[course_idcourse];";
                $result_from_course_info=mysqli_query($connection,$course_info);
                mysqli_data_seek($result_from_course_info,0);
                $course_record=mysqli_fetch_assoc($result_from_course_info);

            }
        }
    }

}else{

}
?>

<?php require_once './footer.php' ?>

</body>
</html>
