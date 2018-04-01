<?php
/**
 * Retrieves data corresponding to the nav from the database connected to with $connection and returns a PDOStatement
 * that contains all nav informations
 * @param PDO $connection
 * @return PDOStatement
 */
function retrievePageNavData(PDO &$connection) : PDOStatement
{
    $queryStr = "
        SELECT
            `title_nav`,
            `slug`
        FROM
            `page`
    ";
    $stmt = $connection->prepare($queryStr);
    $stmt->execute();
    return $stmt;
}

/**
 * Retrieves data corresponding to the content from the database connected to with $connection and returns a
 * PDOStatement that contains all content informations
 * @param PDO $connection
 * @return PDOStatement
 */
function retrievePageContentData(PDO &$connection) : PDOStatement
{
    $slugQuery = "";
    if (isset($_GET["page"])) {
        $slugQuery = "page=" . $_GET["page"];
    }
    $queryStr = "
        SELECT
            `h1`,
            `paragraphe`,
            `span_class`,
            `span_text`,
            `img_alt`,
            `img_src`
        FROM
            `page`
        WHERE
            `slug`='" . $slugQuery . "'
        ";
    $stmt = $connection->prepare($queryStr);
    $stmt->execute();
    return $stmt;
}