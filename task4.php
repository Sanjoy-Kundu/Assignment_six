<?php
//query 
// sorry sir i cant manage databse here is the database query 
$query = "SELECT customer_name, SUM(purchase_amount) AS total_purchase_amount
          FROM table_name
          GROUP BY customer_name
          ORDER BY total_purchase_amount DESC
          LIMIT 5";

          echo $query;


?>