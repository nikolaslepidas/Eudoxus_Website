<?php
  // Connect to the database
  require_once 'mysql_connector.php';

  if (isset($_POST['register'])) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      //two passwords match
      if ($_POST['password'] == $_POST['confirm_password']) {

        $username = $_POST['username'];
        $register_email = $_POST['register_email'];
        $password = $_POST['password'];

        $query = "select * from user where email='$register_email'";
        $result = mysqli_query($connection, $query);
        mysqli_data_seek($result, 0);
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) == 0) {
          
            //userGroup = student
            if (($userGroup = $_POST['userGroup']) == 'student') {

              if (($university = $_POST['university']) != 'none') {

                if (($department = $_POST['ekpa_department']) != 'none') {

                  $query = "insert into user (email,username,password,userGroup) values ('$register_email', '$username', '$password', '$userGroup')";
                  mysqli_query($connection, $query);
                  $query = "insert into student (user_email,university,department) values ('$register_email', '$university', '$department')";
                  mysqli_query($connection, $query);

                } else {
                  $error = 'Παρακαλώ επιλέξτε τμήμα.';
                  // below we use jquery 
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

            //userGroup = publisher
            } else if (($userGroup = $_POST['userGroup']) == 'publisher') {
      
              $name = $_POST['name'];
              $city = $_POST['city'];
              $phone = $_POST['phone'];

              $query = "insert into user (email,username,password,userGroup) values ('$register_email', '$username', '$password', '$userGroup')";
              mysqli_query($connection, $query);
              $query = "insert into publisher (user_email,brand_name,city,phone) values ('$register_email', '$name', '$city', '$phone')";
              mysqli_query($connection, $query);           
      
            //userGroup none
            } else if (($userGroup = $_POST['userGroup']) == 'none') {
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

      <label for="register_email"><b>E-mail *</b></label>
      <input type="email" name="register_email" placeholder="Εισαγωγή e-mail" id="register_email" required>

      <label for="psw02"><b>Συνθηματικό *</b></label>
      <input type="password" name="password" placeholder="Εισαγωγή συνθηματικού" id="psw02" required>

      <label for="psw03"><b>Επαλήθευση συνθηματικού *</b></label>
      <input type="password" name="confirm_password" placeholder="Εισαγωγή συνθηματικού" id="psw03" required>

      <label for="userGroup"><b>Ομάδα χρήστη *</b></label>
      <select id="userGroup" name="userGroup" required>
        <option value="none">--</option>
        <option value="student">Φοιτητής</option>
        <option value="publisher">Εκδότης</option>
        <option value="distributor">Διανομέας</option>
        <option value="sectretary">Γραμματεία</option>
      </select>

      <div id="univ" style="display: none;">
        <label for="university"><b>Πανεπιστήμιο *</b></label>
        <select id="university" name="university">
            <option value="none">--</option>
            <option value="ekpa">ΕΚΠΑ</option>
        </select>
      </div>

      <div id="depart" style="display: none;">
        <label for="ekpa_department"><b>Τμήμα *</b></label>
        <select id="ekpa_department" name="ekpa_department">
          <option value="none">--</option>
          <option value="computer">Πληροφορικής & Τηλεπικοινωνιών</option>
          <option value="maths">Μαθηματικών</option>
          <option value="chemistry">Χημείας</option>
        </select>
      </div>

      <div id="publisher_fields" style="display: none;">
        <label for="name"><b>Όνομα εκδοτικού οίκου *</b></label>
        <input type="text" name="name" placeholder="Εισαγωγή ονόματος εκδοτικού οίκου" id="name" required>
        <label for="city"><b>Πόλη εκδοτικού οίκου *</b></label>
        <input type="text" name="city" placeholder="Εισαγωγή πόλης εκδοτικού οίκου" id="city" required>
        <label for="phone"><b>Τηλέφωνο εκδοτικού οίκου *</b></label>
        <input type="text" name="phone" placeholder="Εισαγωγή τηλεφώνου εκδοτικού οίκου" id="phone" required>
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