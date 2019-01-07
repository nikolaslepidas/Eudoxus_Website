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
			<li>Αναζήτηση Σημείων Διανομής</li> 
		</ul>
	</div>


    <?php
 // Connect to the database
 require_once 'mysql_connector.php';

if (isset($_POST['bookStore_search'])){

    if ((isset($_POST['name']))){
        $name = $_POST['name'];
        if (empty($name)){
            $name = "%";
        }
    }

    if (isset($_POST['county'])){
        $county = $_POST['county'];
        if (empty($county)){
            $county = "%";
        }
    }

    if (isset($_POST['city'])){
        $city = $_POST['city'];
        if (empty($city)){
            $city = "%";
        }
    }

    if (!((strcmp($name,"%") == 0) && (strcmp($county,"%") == 0) && (strcmp($city,"%") == 0))){

        $query = "select * from bookStore where name like '$name' and county like '$county' and city like '$city';";
    
        echo $query;
        $result=mysqli_query($connection,$query);
        //echo var_dump($result);
        mysqli_data_seek($result, 0);
    
        for($i=0;$i<mysqli_num_rows($result);$i++){
            $row = mysqli_fetch_assoc($result);
            echo $row['name'];
            echo $row['county'];
            echo $row['city'];
            echo $row['address'];
            echo $row['phone'];
        }
    }
}

?>

    <div class="container_com_form">
    <table>
        <tbody>
        <form id="bookStore_search_form" method="post">
        <tr>
            <th>
                Επωνυμία:
            </th>
            <td>
                <input name="name" type="text" id="unameid" style="width:88%;">
            </td>
        </tr>
        <tr>
            <th>
                Νομός:
            </th>
            <td>
                <input name="county" type="text" id="telid" style="width:88%;">
            </td>
        </tr>
        <tr>
            <th>
                Πόλη:
            </th>
            <td>
                <input name="city" type="text" id="emailid" style="width:88%;">
            </td>
        </tr>
        </form>
        <tr>
            <th></th>
            <td>
                <button type="submit" name="bookStore_search" form="bookStore_search_form">Αναζήτηση</button>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
    

	<?php require_once './footer.php' ?>

    </body>
</html>