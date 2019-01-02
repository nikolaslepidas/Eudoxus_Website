<?php
//session_start(); // Starting Session

if (isset($_POST['login'])) {

    // Define $username and $password
    $username=$_POST['username'];
    $password=$_POST['password'];

    //echo $username;
    //echo $password;

    // Connect to the database
    require_once 'mysql_connector.php';

    // SQL query to fetch information of registerd users and finds user match.
    $query = "select * from users where  username='$username' and password='$password'";
    $result=mysqli_query($connection,$query);
    mysqli_data_seek($result,0);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
      $_SESSION['logged_user']=$username; // Initializing Session
      //header("location: index.php"); // Redirecting To Other Page
      header("Refresh:0");
    } 
    else {
      $error = "Δεν βρέθηκε χρήστης με τον συνδυασμό ονόματος χρήστη και συνθηματικού που δώσατε.";
      echo "<script> 
      $(function(){
        $('#id01').show();
      });
      </script>";
      echo "<script> 
      $(function(){
        $('#login_problem').text('$error');
      });
      </script>";
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
        
      <button id="login" type="submit" name="login">Σύνδεση</button>
      <label>
        <input type="checkbox" checked="checked" id="remember01"> Να με θυμάσαι
      </label>
      <br>
      <label id="login_problem" style="color:red;">
      </label>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Ακύρωση</button>
      <span class="psw">Ξέχασες το <a href="#">συνθηματικό</a>;</span>
    </div>
  </form>
</div>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Είσοδος</button>

<!-- End of Html for the modal login -->

