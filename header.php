<div id="header">
	<div id="logo-position">
		<a href="index.php">	<img src="./images/logo.png"	alt="logo" > 	</a>
	</div>	

	<div class="header-right">
		<div id="search"> 
				<input type="text" placeholder="Search.." name ="search"	>
		</div>
		<div id="sign-in-up">
			<?php 
			session_start();
			if (isset($_SESSION['logged_user'])) {		// if logged in show me another interface in the top right of the header (username/logout)
				require_once './username.php';
			} else {
				require_once './login.php';
				require_once './signup.php';
			}
			?>
		</div>
	</div>
</div>



<div id="menu">

<div class="dropdown">	
	<ul>
		<li >
			<a href="student.php" >Φοιτητής</a>
			<div class="dropdown-content drop-button">
				<a href="./bookOrder1.php">Δήλωση συγγραμμάτων</a>
				<a href="#">Ανταλλαγή συγγραμμάτων</a>
				<a href="#">Σημειώσεις και Βοηθήματα</a> 
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>
		
		<li >
			<a href="publisher.php" >Εκδότης</a>
			<div class="dropdown-content drop-button">
				<a href="#">Διανομή συγγραμμάτων</a>
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>	
		
		<li >
			<a href="bookStore.php" >Διανομέας</a>
			<div class="dropdown-content drop-button">
				<a href="#">Παράδοση συγγραμμάτων</a>
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>
		
		<li >
			<a href="secretary.php" >Γραμματεία</a>
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