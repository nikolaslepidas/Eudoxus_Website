<button id="profile_button" style="width: auto;"><?php echo $_SESSION['logged_user']; ?></button>
<button id="logout_button" style="width: auto;">Αποσύνδεση</button>


<script>
    document.getElementById("profile_button").onclick = function () {
        location.href = "./profile.php";
    };
    document.getElementById("logout_button").onclick = function () {
        location.href = "./logout.php";
    };
</script>