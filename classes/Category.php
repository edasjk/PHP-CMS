<?php

/**
* Category
*
* Groupings for article
*/
class Category
{

  public static function getAll($conn)
  {
      /**
      * Get all categories
      *
      * @param object $conn Connection to DB
      *
      * @return array An associative array of all article records
      */

      $sql = "SELECT *
              FROM category
              ORDER BY name";

      $results = $conn->query($sql);

      return $results->fetchAll(PDO::FETCH_ASSOC);
  }


}
