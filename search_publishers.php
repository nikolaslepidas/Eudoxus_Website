<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/breadcrumbs.css">
		<link rel="stylesheet" href="css/communication_form.css">
        <link rel="stylesheet" href="css/presentation_of_publishers.css">
        <link rel="stylesheet" href="css/bookOrder.css">
        
		<title>Εύδοξος - Αναζήτηση Εκδοτών</title>
        
	</head>
	<body>
        
    <?php require_once './header.php' ?>
    <!-- Breadcrumb -->
    <div class="wrapper">
		<ul class="breadcrumb">
			<li><a href="index.php">Αρχική</a></li>
			<li>Αναζήτηση Εκδοτών</li> 
		</ul>
	</div>

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
                $result=mysqli_query($connection,$query);
                mysqli_data_seek($result, 0);
                $count = mysqli_num_rows($result);

                echo "</div>
                <div class='rows_of_results'>
                
                <p>Αριθμός αποτελεσμάτων: $count</p>
                <hr>
                </div>
                </div>
                ";

                echo "<div class='padding_needed_for_footer'>
                <div class='present_publisher'>";
            
                for($i=0;$i<mysqli_num_rows($result);$i++){
                    $row = mysqli_fetch_assoc($result);
                    echo "
                    
                    <div class='publisher'>

                    <table>
                        <tbody>
                            <tr>
                                <td><p>Επωνυμία:</p></td>
                                <td>$row[brand_name]</td>
                            </tr>
                            <tr>
                                <td><p>Πόλη:</p></td>
                                <td>$row[city]</td>
                            </tr>
                            <tr>
                                <td><p>Τηλέφωνο:</p></td>
                                <td>$row[phone]</td>
                            </tr>
                        </tbody>
                    </table>

                    </div>
                    ";
                }
            }
            echo "</div></div>";
        }

    ?>

	<?php require_once './footer.php' ?>

    </body>
</html>