<?php
/**
 * Retrieves content data and puts it in the DOM
 * @param PDO $connection
 */
function displayContent(PDO &$connection) : void
{
    $data = retrievePageContentData($connection)->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class='jumbotron'>
        <h1><?= $data["h1"] ?></h1>
        <p><?= $data["paragraphe"] ?></p>
        <span class='label-<?= $data["span_class"] ?>'>
            <?= $data["span_text"] ?>
        </span>
    </div>
    <img
        class='img-thumbnail' alt='<?= $data["img_alt"] ?>'
        src='<?= $data["img_src"] ?>' data-holder-rendered='true'
    >
    <?php
}