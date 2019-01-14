<div id="header">
	<div id="logo-position">
		<a href="index.php">
			<img src="./images/logo.png" alt="logo">
		</a>
	</div>

	<div class="header-right">
		<div id="sign-in-up">
			<?php 
			session_start();
			if (isset($_SESSION['logged_user'])) {		// if logged in show me another interface in the top right of the header (username/logout)
				require './username.php';
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
				<form method="post" action="./student.php">
					<button type="submit">Φοιτητής</button>
				</form>
				<div class="dropdown-content">
					<form method="post" action="./bookOrder1.php">
						<button type="submit">Δήλωση συγγραμμάτων</button>
					</form>
					<form method="post" action="#">
						<button type="submit">Ανταλλαγή συγγραμμάτων</button>
					</form>
					<form method="post" action="#">
						<button type="submit">Σημειώσεις και Βοηθήματα</button>
					</form>
					<form method="post" action="#">
						<button type="submit">Οδηγίες</button>
					</form>
					<form method="post" action="#">
						<button type="submit">Συχνές ερωτήσεις</button>
					</form>
				</div>
			</li>
			
			<li >
				<form method="post" action="./publisher.php">
					<button type="submit">Εκδότης</button>
				</form>
				<div class="dropdown-content">
					<form method="post" action="#">
						<button type="submit">Διανομή συγγραμμάτων</button>
					</form>
					<form method="post" action="#">
						<button type="submit">Οδηγίες</button>
					</form>
					<form method="post" action="#">
						<button type="submit">Συχνές ερωτήσεις</button>
					</form>
				</div>
			</li>	
			
			<li >
				<form method="post" action="./bookStore.php">
					<button type="submit">Διανομέας</button>
				</form>
				<div class="dropdown-content">
					<form method="post" action="#">
						<button type="submit">Παράδοση συγγραμμάτων</button>
					</form>
					<form method="post" action="#">
						<button type="submit">Οδηγίες</button>
					</form>
					<form method="post" action="#">
						<button type="submit">Συχνές ερωτήσεις</button>
					</form>
				</div>
			</li>
			
			<li >
				<form method="post" action="./secretary.php">
					<button type="submit">Γραμματεία</button>
				</form>
				<div class="dropdown-content">
					<form method="post" action="#">
						<button type="submit">Εισαγωγή προγράμματος σπουδών</button>
					</form>
					<form method="post" action="#">
						<button type="submit">Εισαγωγή προτεινόμενων συγγραμμάτων</button>
					</form>
					<form method="post" action="#">
						<button type="submit">Οδηγίες</button>
					</form>
					<form method="post" action="#">
						<button type="submit">Συχνές ερωτήσεις</button>
					</form>
				</div>
			</li>

			<li >
				<form method="post" action="./search_books.php">
					<button type="submit">Αναζήτηση</button>
				</form>
				<div class="dropdown-content drop-button">
					<form method="post" action="./search_books.php">
						<button type="submit">Συγγραμμάτων</button>
					</form>
					<form method="post" action="./search_bookStores.php">
						<button type="submit">Σημείων Διανομής</button>
					</form>
					<form method="post" action="./search_publishers.php">
						<button type="submit">Εκδοτών</button>
					</form>
				</div>	
			</li>
			<li >
				<form method="post" action="./communication_form.php">
					<button type="submit">Επικοινωνία</button>
				</form>
			</li>
		</ul>
	</div>
</div>
<!-- End of navbar -->

<script src="javascript/login_signup.js"></script>