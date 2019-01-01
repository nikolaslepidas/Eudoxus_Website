<?php
//session_start(); // Starting Session

if (isset($_POST['submit'])) {

    // Define $username and $password
    $username=$_POST['username'];
    $password=$_POST['password'];

    echo $username;
    echo $password;

    // Connect to the database
    require_once 'mysql_connector.php';

    // SQL query to fetch information of registerd users and finds user match.
    $query = "select * from user where  username='$username' and password='$password'";
    $result=mysqli_query($connection,$query);
    mysqli_data_seek($result,0);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
<<<<<<< HEAD
      $_SESSION['logged_user']=$username; // Initializing Session
      //header("location: index.php"); // Redirecting To Other Page
      header("Refresh:0");
    } 
    else {
      $error = "Username or Password is invalid";
      echo "<script> 
      $(function(){
        $('#id01').show();
      });
      </script>";
      echo "<script> 
      $(function(){
        $('#nikos').text('$error');
      });
      </script>";
=======
        $_SESSION['logged_user']=$username; // Initializing Session
        //header("location: index.php"); // Redirecting To Other Page
        header("Refresh:0");
    } 
    else {
      if(isset($_POST['submit'])) {
        echo ("<script> validateLogin(); </script>");
      }
       //$error = "Username or Password is invalid";
>>>>>>> a2db1bff8f8e1e93c414b02b50bb462d0334e51e
    }
    mysqli_close($connection); // Closing Connection
}
?>

<!-- Html for the modal login -->

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" > <!--action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Κλείσιμο παραθύρου">&times;</span>
      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container">
      <label for="uname01"><b>Όνομα χρήστη</b></label>
      <input type="text" name="username" placeholder="Εισαγωγή ονόματος χρήστη" id="uname01" required>

      <label for="psw01"><b>Συνθηματικό</b></label>
      <input type="password" name ="password" placeholder="Εισαγωγή συνθηματικού" id="psw01" required>
        
      <button id="login" type="submit" name="submit">Σύνδεση</button>
      <label>
        <input type="checkbox" checked="checked" id="remember01"> Να με θυμάσαι
      </label>
<<<<<<< HEAD
      <label id="nikos" style="color:red;">
      </label>
=======
      <label id="login_problem"></label>
>>>>>>> a2db1bff8f8e1e93c414b02b50bb462d0334e51e
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Ακύρωση</button>
      <span class="psw">Ξέχασες το <a href="#">συνθηματικό</a>;</span>
    </div>
  </form>
</div>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Είσοδος</button>

<!-- End of Html for the modal login -->

