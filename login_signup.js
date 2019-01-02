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
    var userGroup = document.getElementById('userGroup');

    // Make visible the right extra fields for registration
    function hiddenUniversities() {
      if (userGroup.value == "none") {
        document.getElementById('university').value = "none";
        document.getElementById('univ').style.display = "hidden";
        document.getElementById('depart').style.display = "hidden";
      } else if (userGroup.value == "student") {
        document.getElementById('univ').style.display = "block";
      } else if (userGroup.value == "publisher") {
        document.getElementById('university').value = "none";
        document.getElementById('univ').style.display = "none";
        document.getElementById('depart').style.display = "hidden";
      } else {
        document.getElementById('university').value = "none";
        document.getElementById('univ').style.display = "none";
        document.getElementById('depart').style.display = "hidden";
      }
    }

    // Get user_univ
    var university = document.getElementById('university');

    // Make visible departments
    function hiddenDepartments() {
      if (university.value == "none") {
        document.getElementById('ekpa_department').value = "none";
        document.getElementById('depart').style.display = "none";    // add other universities' departments also
      } else if (university.value == "ekpa") {
        document.getElementById('depart').style.display = "block";
      }
    }

    university.onchange = hiddenDepartments;
    userGroup.onchange = hiddenUniversities;
    psw02.onkeyup = validatePassword;
    psw03.onkeyup = validatePassword;
