<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $book1 = $_POST['Grammiki_Algebra']; 
        $book2 = $_POST['Diakrita_Mathimatika']; 
        $book3 = $_POST['Analisi_II'];
        echo $book1;
        echo $book2;
        echo $book3;
    }else
        echo "no post request got here";
        echo var_dump($_POST);



        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $book1 = $_GET['Grammiki_Algebra']; 
            $book2 = $_GET['Diakrita_Mathimatika']; 
            $book3 = $_GET['Analisi_II'];
            echo $book1;
            echo $book2;
            echo $book3;
            echo var_dump($_GET);
            
            // The request is using the POST method
        }else
        echo "no post request got here";
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