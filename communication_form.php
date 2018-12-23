<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset ="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/modal_login.css">
        <link rel="stylesheet" href="css/communication_form.css">

		<title>Εύδοξος - Αρχική σελίδα</title>

	</head>
	<body>

	<?php require_once './header.php' ?>

    <div class="container_grid">
    <table>
        <tbody>
        <tr>
            <th>
                Ονοματεπώνυμο:
            </th>
            <td>
                <input name="uname" type="text" id="unameid" style="width:88%;">
            </td>
        </tr>
        <tr>
            <th>
                E-mail:
            </th>
            <td>
                <input name="uname" type="text" id="unameid" style="width:88%;">
            </td>
        </tr>
        <tr>
            <th>
                Κείμενο:
            </th>
            <td>
            <textarea  name="comments" maxlength="1000" cols="25" rows="6" style="width:87%; resize: none;"></textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <button type="button">Αποστολή</button>
            </td>
        </tr>
        </tbody>
    </table>
    </div>

    <?php require_once './footer.php'  ?>

</body>
</html>