<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "odacious1") or die("Connection Failed");

if  (isset($_POST['login'])) {

	$q = "SELECT * FROM users WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
	$r = mysqli_query($conn, $q);

$row = mysqli_fetch_assoc($r);
$_SESSION['user_id'] = $row['id'];
if ($r) {
	if (mysqli_num_rows($r) > 0) {
		header("location:home_page.php");
	} else {
		?>
		<script type="text/javascript">
			alert("This User Does Not Exist!");
		</script>
		<?php
	}
} else {
	?>
	<script type="text/javascript">
		alert("Sorry, something went wrong. Please try again later. Thank You.");
	</script>
	<?php
}
}
?>