<?php
/**
 * Calls displayLi() for each item contained in $data, and passes this item to the function as a parameter
 * @param array $data
 */
function displayEveryLi(array &$data) : void
{
  foreach ($data as $dataItem) {
    displayLi($dataItem);
  }
}

/**
 * Fills an HTML li with informations passed as an array in the parameter and puts it in the DOM
 * @param array $dataItem
 */
function displayLi(array $dataItem) : void
{
  // Add active class to li if it corresponds to the current page
  $active = "";
  if (!isset($_GET["page"]) && $dataItem["slug"] === "") {
    $active = " class='active'";
  } else if (isset($_GET["page"]) && $dataItem["slug"] === "page=" . $_GET["page"]) {
    $active = " class='active'";
  }
  // Add the corresponding slug in the link if needed
  $slugs = "";
  if ($dataItem["slug"]) {
      $slugs = "?" . $dataItem["slug"];
  }
  $slug = "";
  // Display li
  ?>
  <li<?= $active ?>>
    <a href="index.php<?= $slugs ?>">
      <?= $dataItem["title_nav"] ?>
    </a>
  </li>
  <?php
}
