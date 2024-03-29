<?php 
	session_start();
	include 'init.php';
?>

<div class="container">
	<div class="row">
		<?php
			//$category = isset($_GET['pageid']) && is_numeric($_GET['pageid']) ? intval($_GET['pageid']) : 0;
			if (isset($_GET['name'])) {
				$tag = $_GET['name'];
				echo "<h1 class='text-center'>" . $tag . "</h1>";
				$tagItems = getAllFrom("*", "items", "WHERE tags like '%$tag%'", "AND Approve = 1", "Item_ID");
				foreach ($tagItems as $item) {
					echo "<div class='col-sm-6 col-md-3'>";
						echo "<div class='thumbnail item-box'>";
							echo "<span class='price-tag'>$" . $item['Price'] . "</span>";
							echo "<img class='img-responsive' src='no-img.png' alt=''>";
							echo "<div class='caption'>";
								echo "<h3><a href='items.php?itemid=" . $item['Item_ID'] . "'>" . $item['Name'] . "</a></h3>";
								echo "<p>" . $item['Description'] . "</p>";
								echo "<div class='date'>" . $item['Add_Date'] . "</div>";
							echo "</div>";
						echo "</div>";
					echo "</div>";	
				}
			} else {
				echo "<div class='alert alert-danger'>You Must Enter Tag Name</div>";
			}
		?>
	</div>
</div>

<?php include $tpl . 'footer.php'; ?>