    // Get the modal
    var modal1 = document.getElementById('id01');
    var modal2 = document.getElementById('id02');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }else if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }

    // Show an error if two passwords do not match
    function validatePassword() {
      // Get the passwords
      var psw02 = document.getElementById('psw02');
      var psw03 = document.getElementById('psw03');
      var matchpass = document.getElementById('matchpass');

      if ((psw02.value) != (psw03.value)) {
        matchpass.innerHTML = "Οι κωδικοί δεν είναι όμοιοι!";
        matchpass.style.color = "red";
        return -1;
      } else if ((psw02.value == "") && (psw03.value == "")){
        matchpass.innerHTML = "";
        return -2;
      } else {
        matchpass.innerHTML = "Οι κωδικοί ταιριάζουν!";
        matchpass.style.color = "green";
        return 1;
      }
    }

    // Get register button
    var register = document.getElementById('register');
    // Get registration_problem
    var registration_problem = document.getElementById('registration_problem');
    // Get sign up id
    var sign_up_id = document.getElementById('id02');
    // Get username
    var username = document.getElementById('uname02');
    // Get email
    var email = document.getElementById('email');


    // Validate registration
    function validateRegister() {
      if ((validatePassword() == 1) && (username.value != "") && (email.value != "")) { // check also if the email or username are already used (database)
        registration_problem.innerHTML = "";
        return true;
      } else if ((username.value == "") || (email.value == "") || (psw02.value == "") || (psw03.value == "")) {
        registration_problem.innerHTML = "Παρακαλώ συμπλήρωσε όλα τα υποχρεωτικά πεδία.";
        registration_problem.style.color = "red";
        return false;
      } else if (validatePassword() == -1) {
        registration_problem.innerHTML = "Έλεγξε ότι ταιριάζουν τα συνθηματικά που έχεις επιλέξει.";
        registration_problem.style.color = "red";
        return false;
      } else if (validatePassword() == -2) {
        registration_problem.innerHTML = "Παρακαλώ προσθέστε κάποιο συνθηματικό.";
        registration_problem.style.color = "red";
        return false;
      }
    }

    // Get user-team
    var user_team = document.getElementById('user_team');

    // Make visible the right extra fields for registration
    function hiddenUniversities() {
      if (user_team.value == "none") {
        document.getElementById('university').value = "none";
        document.getElementById('univ').style.visibility = "hidden";
        document.getElementById('depart').style.visibility = "hidden";
      } else if (user_team.value == "student") {
        document.getElementById('univ').style.visibility = "visible";
      } else if (user_team.value == "publisher") {
        document.getElementById('university').value = "none";
        document.getElementById('univ').style.visibility = "hidden";
        document.getElementById('depart').style.visibility = "hidden";
      } else if (user_team.value == "distributor") {
        document.getElementById('university').value = "none";
        document.getElementById('univ').style.visibility = "hidden";
        document.getElementById('depart').style.visibility = "hidden";
      } else if (user_team.value == "secretary") {
        document.getElementById('university').value = "none";
        document.getElementById('univ').style.visibility = "hidden";
        document.getElementById('depart').style.visibility = "hidden";
      }
    }

    // Get user_univ
    var university = document.getElementById('university');

    // Make visible departments
    function hiddenDepartments() {
      if (university.value == "none") {
        document.getElementById('ekpa_department').value = "none";
        document.getElementById('depart').style.visibility = "hidden";    // add other universities' departments also
      } else if (university.value == "ekpa") {
        document.getElementById('depart').style.visibility = "visible";
      }
    }

    university.onchange = hiddenDepartments;
    user_team.onchange = hiddenUniversities;
    register.onclick = validateRegister;
    psw02.onkeyup = validatePassword;
    psw03.onkeyup = validatePassword;
