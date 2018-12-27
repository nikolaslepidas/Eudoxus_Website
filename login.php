<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" > <!--action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Κλείσιμο παραθύρου">&times;</span>
      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container">
      <label for="uname01"><b>Όνομα χρήστη</b></label>
      <input type="text" placeholder="Εισαγωγή ονόματος χρήστη" id="uname01" required>

      <label for="psw01"><b>Συνθηματικό</b></label>
      <input type="password" placeholder="Εισαγωγή συνθηματικού" id="psw01" required>
        
      <button type="submit">Σύνδεση</button>
      <label>
        <input type="checkbox" checked="checked" id="remember01"> Να με θυμάσαι
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Ακύρωση</button>
      <span class="psw">Ξέχασες το <a href="#">συνθηματικό</a>;</span>
    </div>
  </form>
</div>
