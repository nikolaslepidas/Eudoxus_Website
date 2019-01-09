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
            
            $book_info_from_db=mysqli_query($connection,"select * from book where greeklishTitle='$checked_books[$j]';");
            //echo "select * from book where greeklishTitle='$checked_books[$j]';";
            mysqli_data_seek($book_info_from_db,0);
            $row = mysqli_fetch_assoc($book_info_from_db);
            $query="select * from book, bookstore, bookstore_has_book where bookstore_idbookstore=idbookstore and isbn=book_isbn  and isbn=$row[isbn];";
            //echo $query;
            $bookstore_for_books=mysqli_query($connection,$query);
            mysqli_data_seek($bookstore_for_books,0);
            //echo $checked_books_length;
            //echo var_dump($bookstore_for_books);
            //$row = mysqli_fetch_assoc($bookstore_for_books);
                echo "
                <button class='accordion'>$checked_books[$j]</button>
                <div class='panel'>
                <form id='form1' class='bookForm' action='bookOrder3.php' method='post' >
                ";
                    //$row = mysqli_fetch_assoc($bookstore_for_books);
                    echo "
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                    
                                    </td>

                                    <td>
                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                    
                                    </td>

                                    <td>
                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                    
                                    </td>

                                    <td>
                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                    
                                    </td>

                                    <td>
                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    
                                    </td>

                                    <td>
                                    
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    ";

                echo "
                    </form>
                    </div>
                    
                ";
            //}

        }
            echo "
            <form class='button' action='bookOrder1.php' method='get'>
            <button class='next-previous-buttons' > Προηγούμενο</button>
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