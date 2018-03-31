<!-- Import functions -->
<?php require_once  "includes/functions.php" ?>
<!-- Create connection -->
<?php require_once "includes/connection.php" ?>
<!-- Retrieve data from database -->
<?php $data = retrievePageData($connection); ?>
<!-- DOM -->
<?php require_once "includes/header.php" ?>
<?php require_once "includes/nav.php" ?>
<?php require_once "includes/content.php" ?>
<?php require_once "includes/footer.php" ?>
