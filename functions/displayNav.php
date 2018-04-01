<?php
/**
 * Retrieves nav data and passes each row of the PDOStatement returned as argument to the function displayLi()
 * @param PDO $connection
 */
function displayEveryLi(PDO &$connection) : void
{
    // Retrieves data
    $stmt = retrievePageNavData($connection);
    // Calls to displayLi()
    while ($dataItem = $stmt->fetch(PDO::FETCH_ASSOC)) {
        displayLi($dataItem);
    }
}

/**
 * Fills an HTML li with informations passed as an array in the parameter and puts it in the DOM
 * @param array $dataItem
 */
function displayLi(array &$dataItem) : void
{
  // Adds active class to li if it corresponds to the current page
  $active = "";
  if (!isset($_GET["page"]) && $dataItem["slug"] === "") {
    $active = " class='active'";
  } else if (isset($_GET["page"]) && $dataItem["slug"] === "page=" . $_GET["page"]) {
    $active = " class='active'";
  }
  // Adds the corresponding slug in the link if needed
  $slugs = "";
  if ($dataItem["slug"]) {
      $slugs = "?" . $dataItem["slug"];
  }
  $slug = "";
  // Displays li
  ?>
  <li<?= $active ?>>
    <a href="index.php<?= $slugs ?>">
      <?= $dataItem["title_nav"] ?>
    </a>
  </li>
  <?php
}
