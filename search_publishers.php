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
			<li>Αναζήτηση Εκδοτών</li> 
		</ul>
	</div>

    <?php
 // Connect to the database
 require_once 'mysql_connector.php';

if (isset($_POST['publisher_search'])){

    if ((isset($_POST['brand_name']))){
        $brand_name= $_POST['brand_name'];
        if (empty($brand_name)){
            $brand_name= "%";
        }
    }

    if (isset($_POST['city'])){
        $city = $_POST['city'];
        if (empty($city)){
            $city = "%";
        }
    }

    if (!((strcmp($brand_name,"%") == 0) && (strcmp($city,"%") == 0))){

        $query = "select * from publisher where brand_name like '$brand_name' and city like '$city';";
    
        echo $query;
        $result=mysqli_query($connection,$query);
        //echo var_dump($result);
        mysqli_data_seek($result, 0);
    
        for($i=0;$i<mysqli_num_rows($result);$i++){
            $row = mysqli_fetch_assoc($result);
            echo $row['brand_name'];
            echo $row['city'];
            echo $row['phone'];
            echo $row['user_email'];
        }
    }
}

?>

    <div class="container_com_form">
    <table>
        <tbody>
        <form id="publisher_search_form" method="post">
        <tr>
            <th>
                Επωνυμία:
            </th>
            <td>
                <input name="brand_name" type="text" id="unameid" style="width:88%;">
            </td>
        </tr>
        <tr>
            <th>
                Πόλη:
            </th>
            <td>
                <input name="city" type="text" id="telid" style="width:88%;">
            </td>
        </tr>
        </form>
        <tr>
            <th></th>
            <td>
                <button type="submit" name="publisher_search" form="publisher_search_form">Αναζήτηση</button>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
    

	<?php require_once './footer.php' ?>

    </body>
</html>