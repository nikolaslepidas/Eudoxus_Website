<div id="header">
	<div id="logo-position">
		<a href="index.php">	<img src="./images/logo.png">	</a>
	</div>	

	<div class="header-right">
		<div id="search"> 
				<input type="text" placeholder="Search.." name ="search"	>
		</div>
		<div id="sign-in-up">
			<!--<a href="../../../Users/Nikolas/Desktop/modal_sex.html">Είσοδος</a> -->
			<?php require_once './modal_login.html' ?>
			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Είσοδος</button>
			<!--<a href="#">Εγγραφή</a>-->
			<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Εγγραφή</button>
		</div>
	</div>
</div>



<!--<div id="empty-div">hacked</div>-->

<div id="menu">

<div class="dropdown">	
	<ul>
		<li >
			<a href="index.php" >Αρχική</a>
		</li>
		
		<li >
			<a href="#" >Φοιτητές</a>
			<div class="dropdown-content"  class="drop-button">
				<a href="./testPage.php">Δήλωση συγγραμμάτων</a>
				<a href="#">Ανταλλαγή συγγραμμάτων</a>
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>
		
		<li >
			<a href="#" >Εκδότες</a>
			<div class="dropdown-content"  class="drop-button">
				<a href="#">Διανομή συγγραμμάτων</a>
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>	
		
		<li >
			<a href="#" >Σημεία Διανομής</a>
			<div class="dropdown-content"  class="drop-button">
				<a href="#">Παράδοση συγγραμμάτων</a>
				<a href="#">Παραγγελία συγγραμμάτων</a>
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>
		
		<li >
			<a href="#" >Γραμματεία</a>
			<div class="dropdown-content"  class="drop-button">
				<a href="#">Εισαγωγή προγράμματος σπουδών</a>
				<a href="#">Εισαγωγή προτεινόμενων συγγραμμάτων</a>
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>
		
		<li >
			<a href="#" >Σημειώσεις και Βοηθήματα</a>
			<div class="dropdown-content"  class="drop-button">
				<a href="#">Νέα ανάρτηση/ Οι αναρτήσεις μου</a>
				<a href="#">Αρχείο αναρτήσεων</a>
				<a href="#">Οδηγίες</a>
				<a href="#">Συχνές ερωτήσεις</a>
			</div>
		</li>
		
		<li >
			<a href="#" >Επικοινωνία</a>
			<div class="dropdown-content"  class="drop-button">
				<a href="#">Ηλεκτρονική φόρμα</a>
				<a href="#">Τηλέφωνο</a>
			</div>
		</li>
	</ul>
</div>
</div>
<!-- End of Lamprinos navbar -->