<?php
require_once('includes/db_connect.php'); // Database connection file
require_once('includes/functions.php');  // PHP functions file
?>

<!-- header file -->
<?php require_once('includes/header.php'); ?>

<div>
	<?php
	$total_website_views = total_views($conn); // Returns total website views
	echo "<strong>Total Website Views:</strong> " . $total_website_views;
	?>
</div>

<div style="color: red;">Note: This page only displays the total views of website.<div>

<!-- footer file -->
<?php require_once('includes/footer.php'); ?>