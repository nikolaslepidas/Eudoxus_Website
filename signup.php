
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Κλείσιμο παραθύρου">&times;</span>
      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container">
      <label for="uname02"><b>Όνομα χρήστη *</b></label>
      <input type="text" placeholder="Εισαγωγή ονόματος χρήστη" id="uname02" required>

      <label for="email"><b>E-mail *</b></label>
      <input type="text" placeholder="Εισαγωγή e-mail" id="email" required>

      <label for="psw02"><b>Συνθηματικό *</b></label>
      <input type="password" placeholder="Εισαγωγή συνθηματικού" id="psw02" required>

      <label for="psw03"><b>Επαλήθευση συνθηματικού *</b></label>
      <input type="password" placeholder="Εισαγωγή συνθηματικού" id="psw03" required>

      <label for="user_team"><b>Ομάδα χρήστη *</b></label>
      <select id="user_team">
        <option value="none">--</option>
        <option value="student">Φοιτητής</option>
        <option value="publisher">Εκδότης</option>
        <option value="distributor">Διανομέας</option>
        <option value="sectretary">Γραμματεία</option>
      </select>

      <div id="univ" style="visibility: hidden;">
        <label for="university"><b>Πανεπιστήμιο *</b></label>
        <select id="university">
            <option value="none">--</option>
            <option value="ekpa">ΕΚΠΑ</option>
        </select>
      </div>

      <div id="depart" style="visibility: hidden;">
        <label for="ekpa_department"><b>Τμήμα</b></label>
        <select id="ekpa_department">
          <option value="none">--</option>
          <option value="computer">Πληροφορικής & Τηλεπικοινωνιών</option>
          <option value="maths">Μαθηματικών</option>
          <option value="chemistry">Χημείας</option>
        </select>
      </div>

      <button id="register" type="submit">Εγγραφή</button>
      <label>
        <input type="checkbox" checked="checked" id="remember02"> Να με θυμάσαι
      </label><br>

      <label><b>Όλα τα πεδία με αστερίσκο(*) είναι υποχρεωτικά.</b></label><br><br>
      <label id="matchpass"></label><br>
      <label id="registration_problem"></label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Ακύρωση</button>
      <span class="psw">Ξέχασες το <a href="#">συνθηματικό</a>;</span>
    </div>
  </form>
</div>
