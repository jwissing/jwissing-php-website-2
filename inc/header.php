<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $pageTitle; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Muli%7CRoboto:400,300,500,700,900" rel="stylesheet">
  </head>
  <body>

    <div class="main-nav">
        <ul class="nav">
          <li class="name"><a href="index.php">Kentucky's Native Plants</a></li>
          <li class="trees<?php if ($section == "trees") { echo " on"; } ?>"><a href="catalog.php?cat=trees">Trees</a></li>
          <li class="shrubs<?php if ($section == "shrubs") { echo " on"; } ?>"><a href="catalog.php?cat=shrubs">Shrubs</a></li>
          <li class="groundcover<?php if ($section == "groundcover") { echo " on"; } ?>"><a href="catalog.php?cat=groundcover">Groundcover &amp Vines</a></li>
          <li class="herbaceous<?php if ($section == "herbaceous") { echo " on"; } ?>"><a href="catalog.php?cat=herbaceous">Herbaceous</a></li>
          <li class="grasses<?php if ($section == "grasses") { echo " on"; } ?>"><a href="catalog.php?cat=grasses">Grasses</a></li>
          <li class="all<?php if ($section == "all") { echo " on"; } ?>"><a href="catalog.php?cat=all">All</a></li>
        </ul>
    </div>

    <div id="content">

