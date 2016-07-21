<?php

include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Kentucky Plants";
$section = null;

if (isset($_GET["cat"])){
	if ($_GET["cat"] == "trees") {
		$pageTitle = "Trees Native to Kentucky";
		$section = "trees";
	} else if ($_GET["cat"] == "shrubs") {
		$pageTitle = "Shrubs Native to Kentucky";
		$section = "shrubs";
	} else if ($_GET["cat"] == "grasses") {
		$pageTitle = "Grasses Native to Kentucky";
		$section = "grasses";
	} else if ($_GET["cat"] == "herbaceous") {
		$pageTitle = "Herbaceous Plants Native to Kentucky";
		$section = "herbaceous";
	} else if ($_GET["cat"] == "groundcover") {
		$pageTitle = "Groundcover and Vines Native to Kentucky";
		$section = "groundcover";
	} else if ($_GET["cat"] == "all") {
		$pageTitle = "Plants Native to Kentucky";
		$section = "all";
	}
}

include("inc/header.php"); ?>

<div class="section catalog page">

	<div class="wrapper">
	
		<h1><?php echo $pageTitle; ?></h1>

		<ul class="plants">
			<?php
			
			$categories = array_category($plants,$section);
			
			foreach ($categories as $id) {
				echo get_plant_html($id,$plants[$id]);
			}
			

			/*foreach($plants as $id => $item) {
				echo get_plant_html($id,$item);
			}
			*/
			?>

		</ul>

	</div>
	
</div>



<?php include("inc/footer.php"); ?>