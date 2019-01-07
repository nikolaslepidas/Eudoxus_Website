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

    // Get vars for publisher
    var publisher_fields = document.getElementById('publisher_fields');

    // Get user_univ
    var university = document.getElementById('university');
    var univ = document.getElementById('univ');
    var depart = document.getElementById('depart');


    // Make visible the right extra fields for registration
    function hiddenUniversities() {
      if (userGroup.value == "none") {
        university.value = "none";
        univ.style.display = "none";
        depart.style.display = "none";
        publisher_fields.style.display = "none";
      } else if (userGroup.value == "student") {
        univ.style.display = "block";
        document.getElementById('name').required = false;
        document.getElementById('city').required = false;
        document.getElementById('phone').required = false;
        publisher_fields.style.display = "none";
      } else if (userGroup.value == "publisher") {
        publisher_fields.style.display = "block";
        university.value = "none";
        univ.style.display = "none";
        depart.style.display = "none";
      } else {
        publisher_fields.style.display = "none";
        university.value = "none";
        univ.style.display = "none";
        depart.style.display = "none";
      }
    }

    // Make visible departments
    function hiddenDepartments() {
      if (university.value == "none") {
        document.getElementById('ekpa_department').value = "none";
        depart.style.display = "none";    // add other universities' departments also
      } else if (university.value == "ekpa") {
        depart.style.display = "block";
      }
    }

    university.onchange = hiddenDepartments;
    userGroup.onchange = hiddenUniversities;