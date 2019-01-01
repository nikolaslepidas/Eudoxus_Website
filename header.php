<div id="header">
	<div id="logo-position">
		<a href="index.php">	<img src="./images/logo.png"	alt="logo" > 	</a>
	</div>	

	<div class="header-right">
		<div id="search"> 
				<input type="text" placeholder="Search.." name ="search"	>
		</div>
		<div id="sign-in-up">
			<?php //if(isset($_SESSION['logged_in']) {		// if logged in show me another interface in the top right of the header (username/logout)
				//echo $_SESSION['logged_in'];
				//require_once './username.php';		// shows username (clickable and redirect to profile page)				
				//require_once './logout.php';			// shows logout button (just logout and after this show me again (login/singup) buttons)
		//	} else {
				require_once './login.php';
				require_once './signup.php';
			//}
			?>
		</div>
	</div>
</div>



<div id="menu">

<div class="dropdown">	
	<ul>
		<li >
			<a href="#" >Φοιτητής</a>
			<div class="dropdown-content drop-button">
				<a href="./testPage.php">Δήλωση συγγραμμάτων</a>
				<a href="#">Ανταλλαγή συγγραμμάτων</a>
				<a href="#">Σημειώσεις και Βοηθήματα</a> 
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>
		
		<li >
			<a href="#" >Εκδότης</a>
			<div class="dropdown-content drop-button">
				<a href="#">Διανομή συγγραμμάτων</a>
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>	
		
		<li >
			<a href="#" >Διανομέας</a>
			<div class="dropdown-content drop-button">
				<a href="#">Παράδοση συγγραμμάτων</a>
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>
		
		<li >
			<a href="#" >Γραμματεία</a>
			<div class="dropdown-content drop-button">
				<a href="#">Εισαγωγή προγράμματος σπουδών</a>
				<a href="#">Εισαγωγή προτεινόμενων συγγραμμάτων</a>
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>
<!--		
		<li >
			<a href="#" >Σημειώσεις και Βοηθήματα</a>
			<div class="dropdown-content"  class="drop-button">
				<a href="#">Νέα ανάρτηση/ Οι αναρτήσεις μου</a>
				<a href="#">Αρχείο αναρτήσεων</a>
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>
-->		
		<li >
			<a href="./communication_form.php" >Επικοινωνία</a>	
		</li>
	</ul>
</div>
</div>
<!-- End of navbar -->

<script src="./login_signup.js"></script>