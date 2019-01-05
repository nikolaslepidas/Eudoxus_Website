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


    <div class="container_com_form">
    <table>
        <tbody>
        <tr>
            <th>
                Τίτλος:
            </th>
            <td>
                <input name="uname" type="text" id="unameid" style="width:88%;">
            </td>
        </tr>
        <tr>
            <th>
                Συγγραφέας:
            </th>
            <td>
                <input name="uname" type="text" id="telid" style="width:88%;">
            </td>
        </tr>
        <tr>
            <th>
                Εκδόσεις:
            </th>
            <td>
                <input name="uname" type="text" id="emailid" style="width:88%;">
            </td>
        </tr>
        <tr>
            <th>
                ISBN:
            </th>
            <td>
                <input name="uname" type="text" id="emailid" style="width:88%;">
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <button type="submit">Αναζήτηση</button>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
    

	<?php require_once './footer.php' ?>

    </body>
</html>