<?php
$conn = mysqli_connect("localhost", "root", "", "odacious1") or die("Connection Failed!");

if (isset($_POST['sign_up'])) {
	$target_path = 'profile_pics/';
	$target_path = $target_path.basename($_FILES['profile_picture']['name']);
	$fileType = pathinfo($target_path, PATHINFO_EXTENSION);

	$allowTypes = array('jpg', 'png', 'jpeg');

	if (in_array($fileType, $allowTypes)) {
		if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_path)) {
			
			$q = "INSERT INTO users(id, firstname, lastname, username, password, email, gender, country, profile_picture) VALUES('', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['email']."', '".$_POST['gender']."', '".$_POST['country']."', '".$target_path."')";
			$r = mysqli_query($conn, $q);
			if ($r) {
				?>
				<script type="text/javascript">
					alert("You have successfully registered for Odacious. Now Log Into Your Account.");
				</script>
				<?php
			} else {
				?>
				<script type="text/javascript">
					alert("Sorry, something went wrong. Please try again later. Thank You.");
				</script>
				<?php
			}
		} else {
			?>
			<script type="text/javascript">
					alert("Sorry, there was a problem with uploading your profile picture");
				</script>
			<?php
		}
	} else {
		?>
		<script type="text/javascript">
			alert("Only JPG, PNG and JPEG are allowed!");
		</script>
		<?php
	}
}
?>