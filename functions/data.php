<?php
// TODO: write doc
function retrievePageData(PDO $connection) // TODO: write return type
{
  $query_str = "
    SELECT
      `title`,
      `h1`,
      `paragraphe`,
      `span_class`,
      `span_text`,
      `img_alt`,
      `img_src`,
      `title_nav`,
      `slug`
    FROM
      `page`";
  $stmt = $connection->prepare($query_str);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $data;
}
