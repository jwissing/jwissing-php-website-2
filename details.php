<?php

include("inc/data.php");
include("inc/functions.php");

if (isset($_GET["id"])){
	$id = $_GET["id"];
	if (isset($plants[$id])){
		$item = $plants[$id];
	}
}

if (!isset($item)){
	header("location:catalog.php");
	exit;
}



$pageTitle = $item["name"];
$section = null;

include("inc/header.php"); ?>

<div class="section page">
	<div class="wrapper">
		<div class="plant-picture">
		<span>
			<img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["name"]; ?>" />
		</span>
		</div>
	</div>
</div>

<div class="plant-details">
	<h2><?php echo ucwords($item["name"]); ?></h2>
	<table>

		<tr>
			<th>Family</th>
			<td><?php echo $item["family"]; ?></td>
		</tr>
		<tr>
			<th>Genus</th>
			<td><?php echo $item["genus"]; ?></td>
		</tr>
		<tr>
			<th>Species</th>
			<td><?php echo $item["species"]; ?></td>
		</tr>
		<tr>
			<th>Full Sun?</th>
			<td><?php if ($item["full_sun"] == 1){
				echo "Yes";
			} else {
				echo "No";
			}
			 ?></td>
		</tr>
		<tr>
			<th>Partial Shade?</th>
			<td><?php if ($item["partial_shade"] == 1){
				echo "Yes";
			} else {
				echo "No";
			} ?></td>
		</tr>
		<tr>
			<th>Full Shade?</th>
			<td><?php if ($item["full_shade"] == 1){
				echo "Yes";
			} else {
				echo "No";
			} ?></td>
		</tr>
		<tr>
			<th>Showy Flowers?</th>
			<td><?php if ($item["showy_flowers"] == 1){
				echo "Yes";
			} else {
				echo "No";
			} ?></td>
		</tr>
		<tr>
			<th>Fall Color?</th>
			<td><?php if ($item["fall_color"] == 1){
				echo "Yes";
			} else {
				echo "No";
			} ?></td>
		</tr>
		<tr>
			<th>Food for Wildlife?</th>
			<td><?php if ($item["wildlife_food"] == 1){
				echo "Yes";
			} else {
				echo "No";
			} ?></td>
		</tr>
</div>