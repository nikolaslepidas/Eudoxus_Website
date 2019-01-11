<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/communication_form.css">
        <link rel="stylesheet" href="css/bookOrder.css">

        <script src="accordion.js"></script>

		<title>Εύδοξος - Δήλωση συγγραμμάτων</title>

	</head>
	<body>

	<?php require_once './header.php' ?>
    <!-- Breadcrumb -->
    <div class="wrapper">
		<ul class="breadcrumb">
            <li><a href="index.php">Αρχική</a></li>
            <li><a href="student.php">Φοιτητής</a></li>
			<li>Δήλωση συγγραμμάτων</li>
		</ul>
	</div>


    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $books = array("vasiki_theoria_tis_grammikis_algevras","grammiki_algevra_kai_efarmoges");
        $books_length = count($books);
        $checked_books = array();

        for ($i=0;$i<$books_length;$i++){
            if (isset($_POST[$books[$i]])){
                array_push($checked_books,$_POST[$books[$i]]);
            }
        }
        $checked_books_length = count($checked_books);

        echo "
            <div class='padding_needed_for_footer'>
            ";
        for ($j=0;$j<$checked_books_length;$j++){
            //echo $checked_books[$j];
            //echo "~";
            require_once './mysql_connector.php';
            
            $book_info_from_db=mysqli_query($connection,"select * from book where bookTitle='$checked_books[$j]';");
            //echo "select * from book where bookTitle='$checked_books[$j]';";
            mysqli_data_seek($book_info_from_db,0);
            $row = mysqli_fetch_assoc($book_info_from_db);
            
            //insertion of isbn to table student_has_book
            $insertion=mysqli_query($connection,"update student_has_book set book_isbn=$row[isbn];");

            $query="select * from book, bookstore, bookstore_has_book where bookstore_idbookstore=idbookstore and isbn=book_isbn  and isbn=$row[isbn];";
            //echo $query;
            $bookstore_for_books=mysqli_query($connection,$query);
            mysqli_data_seek($bookstore_for_books,0);
            //echo $checked_books_length;
            //echo var_dump($bookstore_for_books);
            $row = mysqli_fetch_assoc($bookstore_for_books);
                echo "
                <button class='accordion'>$checked_books[$j]</button>
                <div class='panel'>
                <div class='bookForm' >
                        <p style='font-weight:bold;'> Σημείο Διανομής </p>
                        <hr>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p> Όνομα: </p>
                                    </td>

                                    <td>
                                        <p> $row[name] </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> Νομός: </p>
                                    </td>

                                    <td>
                                        <p> $row[county] </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> Πόλη: </p>
                                    </td>

                                    <td>
                                        <p> $row[city] </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> Διεύθυνση: </p>
                                    </td>

                                    <td> 
                                        <p> $row[address] </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> Τηλέφωνο: </p>
                                    </td>

                                    <td>
                                        <p> $row[phone] </p>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    </div>
                    
                ";
            //}

        }
            echo "
            <form class='button' action='myBooks.php' method='post'>
            <button name='myBooks' class='next-previous-buttons' > Δηλωθέντα συγγράμματα </button>
            </form>
                    <button id='button-next1' class='next-previous-buttons'> Εκτύπωση </button>
                    </div> <!-- end of testara-->
               
            ";

    }else{
        /*
        echo "no post request got here";
        echo var_dump($_POST);
        */
    }
?>

	<?php require_once './footer.php' ?>

    </body>
</html>