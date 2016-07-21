<?php


function get_plant_html($id,$item) {
    $output = "<li><a href='details.php?id="
        . $id . "'><img src='" 
				. $item["img"] . "' alt='" 
				. $item["name"] . "' /><br>"
				. $item["name"]
				. "<p>View Details</p>"
				. "</a></li>";
    return $output;
}



function array_category($catalog,$category) {
	$output = array();

	foreach ($catalog as $id => $item) {
		if ($category == "all" OR strtolower($category) == strtolower($item["type"])) {
			$sort = $item["name"];
			$output[$id] = $sort;
		}
	}

	asort($output);
	return array_keys($output);
}




