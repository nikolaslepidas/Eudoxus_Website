<?php

// Connect to the database
require_once 'mysql_connector.php';

if (isset($_POST['register'])) {

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //two passwords match
    if ($_POST['password'] == $_POST['confirm_password']) {

      $username = $_POST['username'];

      if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $query = "select * from users where email = '$email'";
        $result = mysqli_query($connection, $query);
        mysqli_data_seek($result,0);
        $row = mysqli_fetch_assoc($result);

        //unique email used
        if (mysqli_num_rows($result) == 0) {

          $password = $_POST['password'];

          //user_team = student
          if (($user_team = $_POST['user_team']) == 'student') {
/*
            $query = "select * from universities";
            $result = mysqli_query($connection, $query);

            $opt = "<select name='universities'>";
            while ($row = mysqli_fetch_assoc($result)) {
              $opt .= "<option value='".$row['univ_value']."'>".$row['univ_name']."</option>";
            }
            $opt .= "</select>";
*/
/**/
            if (($university = $_POST['university']) != 'none') {

              if (($department = $_POST['ekpa_department']) != 'none') {

                $query = "insert into users (email,username,password,user_team,university,department) values ('$email', '$username', '$password', '$user_team', '$university', '$department')";
                mysqli_query($connection, $query);

              } else {
                $error = 'Παρακαλώ επιλέξτε τμήμα.';
                echo "<script> 
                $(function(){
                  $('#id02').show();
                });
                </script>";
                echo "<script> 
                $(function(){
                  $('#registration_problem').text('$error');
                });
                </script>";
              }
            } else {
              $error = 'Παρακαλώ επιλέξτε πανεπιστήμιο.';
              echo "<script> 
              $(function(){
                $('#id02').show();
              });
              </script>";
              echo "<script> 
              $(function(){
                $('#registration_problem').text('$error');
              });
              </script>";
            }
/**/
          //user_team = publisher
          } else if (($user_team = $_POST['user_team']) == 'publisher') {
    
            $query = "insert into users (email,username,password,user_team) values ('$email', '$username', '$password', '$user_team')";
            mysqli_query($connection, $query);
    
          //user_team none
          } else if (($user_team = $_POST['user_team']) == 'none') {
            $error = 'Παρακαλώ επιλέξτε ομάδα χρηστών.';
            echo "<script> 
            $(function(){
              $('#id02').show();
            });
            </script>";
            echo "<script> 
            $(function(){
              $('#registration_problem').text('$error');
            });
            </script>";
          }

        } else {
          $error = 'Το email που εκχωρήσατε χρησιμοποιείται ήδη.';
          echo "<script> 
          $(function(){
            $('#id02').show();
          });
          </script>";
          echo "<script> 
          $(function(){
            $('#registration_problem').text('$error');
          });
          </script>";
        }
      }
    } else {
      $error = 'Παρακαλώ ελέγξτε ότι ταιριάζουν οι κωδικοί που επιλέξατε';
        echo "<script> 
        $(function(){
          $('#id02').show();
        });
        </script>";
        echo "<script> 
        $(function(){
          $('#registration_problem').text('$error');
        });
        </script>";
    }

  }
  mysqli_close($connection);
}
/*

//extra fields for students
if (($user_team = $_POST['user_team']) == 'student') {
  $query = "select * from universities";
  $result = mysqli_query($connection, $query);

  $opt = "<select name='universities'>";
  while ($row = mysqli_fetch_assoc($result)) {
    $opt .= "<option value='{$row['univ_value']}>{$row['univ_name']}</option>\n";
  }
  $opt .= "</select>";
} else {
  echo "skata";
}
*/
// Closing Connection


?>


<div id="id02" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Κλείσιμο παραθύρου">&times;</span>
      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container">
      <label for="uname02"><b>Όνομα χρήστη *</b></label>
      <input type="text" name="username" placeholder="Εισαγωγή ονόματος χρήστη" id="uname02" required>

      <label for="email"><b>E-mail *</b></label>
      <input type="email" name="email" placeholder="Εισαγωγή e-mail" id="email" required>

      <label for="psw02"><b>Συνθηματικό *</b></label>
      <input type="password" name="password" placeholder="Εισαγωγή συνθηματικού" id="psw02" required>

      <label for="psw03"><b>Επαλήθευση συνθηματικού *</b></label>
      <input type="password" name="confirm_password" placeholder="Εισαγωγή συνθηματικού" id="psw03" required>

      <label for="user_team"><b>Ομάδα χρήστη *</b></label>
      <select id="user_team" name="user_team" required>
        <option value="none">--</option>
        <option value="student">Φοιτητής</option>
        <option value="publisher">Εκδότης</option>
        <option value="distributor">Διανομέας</option>
        <option value="sectretary">Γραμματεία</option>
      </select>
<!---->
      <div id="univ" style="visibility: hidden;">
        <label for="university"><b>Πανεπιστήμιο *</b></label>
        <select id="university" name="university">
            <option value="none">--</option>
            <option value="ekpa">ΕΚΠΑ</option>
        </select>
      </div>

      <div id="depart" style="visibility: hidden;">
        <label for="ekpa_department"><b>Τμήμα *</b></label>
        <select id="ekpa_department" name="ekpa_department">
          <option value="none">--</option>
          <option value="computer">Πληροφορικής & Τηλεπικοινωνιών</option>
          <option value="maths">Μαθηματικών</option>
          <option value="chemistry">Χημείας</option>
        </select>
      </div>

      <button id="register" type="submit" name="register">Εγγραφή</button>
      <label>
        <input type="checkbox" checked="checked" id="remember02"> Να με θυμάσαι
      </label><br>

      <label><b>Όλα τα πεδία με αστερίσκο(*) είναι υποχρεωτικά.</b></label><br><br>
      <label id="matchpass"></label><br>
      <label id="registration_problem" style="color:red;">
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Ακύρωση</button>
      <span class="psw">Ξέχασες το <a href="#">συνθηματικό</a>;</span>
    </div>
  </form>
</div>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Εγγραφή</button>