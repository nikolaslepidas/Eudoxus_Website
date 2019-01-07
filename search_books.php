<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/communication_form.css">

		<title>Εύδοξος - Αναζήτηση</title>
        
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
			<li>Αναζήτηση Συγγραμμάτων</li> 
		</ul>
	</div>


<?php
 // Connect to the database
 require_once 'mysql_connector.php';

if (isset($_POST['book_search'])){

    if ((isset($_POST['book_title']))){
        $book_title = $_POST['book_title'];
        if (empty($book_title)){
            $book_title = "%";
        }
    }

    if (isset($_POST['book_writer'])){
        $book_writer = $_POST['book_writer'];
        if (empty($book_writer)){
            $book_writer = "%";
        }
    }

    if (isset($_POST['book_publisher'])){
        $book_publisher = $_POST['book_publisher'];
        if (empty($book_publisher)){
            $book_publisher = "%";
        }
    }

    if (isset($_POST['book_isbn'])){
        $book_isbn = $_POST['book_isbn'];
        if (empty($book_isbn)){
            $book_isbn = "%";
        }
    }

    if (!((strcmp($book_title,"%") == 0) && (strcmp($book_isbn,"%") == 0) && (strcmp($book_publisher,"%") == 0) && (strcmp($book_writer,"%") == 0))){

        $query = "select * from book where title like '$book_title' and isbn like '$book_isbn' 
        and writer like '$book_writer' and publisher like '$book_publisher';";
    
        echo $query;
        $result=mysqli_query($connection,$query);
        //echo var_dump($result);
        mysqli_data_seek($result, 0);
    
        for($i=0;$i<mysqli_num_rows($result);$i++){
            $row = mysqli_fetch_assoc($result);
            echo $row['title'];
            echo $row['isbn'];
            echo $row['publisher'];
            echo $row['writer'];
        }
    }
}

?>


    <div class="container_com_form">
    <table>
        <tbody>
        <form id="book_search_form" method="post">
        <tr>
            <th>
                Τίτλος:
            </th>
            <td>
                <input name="book_title" type="text" id="unameid" style="width:88%;">
            </td>
        </tr>
        <tr>
            <th>
                Συγγραφέας:
            </th>
            <td>
                <input name="book_writer" type="text" id="telid" style="width:88%;">
            </td>
        </tr>
        <tr>
            <th>
                Εκδόσεις:
            </th>
            <td>
                <input name="book_publisher" type="text" id="emailid" style="width:88%;">
            </td>
        </tr>
        <tr>
            <th>
                ISBN:
            </th>
            <td>
                <input name="book_isbn" type="text" id="emailid" style="width:88%;">
            </td>
        </tr>
        </form>
        <tr>
            <th></th>
            <td>
                <button type="submit" name="book_search" form="book_search_form">Αναζήτηση</button>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
    

	<?php require_once './footer.php' ?>

    </body>
</html>