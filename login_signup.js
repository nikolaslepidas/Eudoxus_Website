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
    psw02.onkeyup = validatePassword;
    psw03.onkeyup = validatePassword;
