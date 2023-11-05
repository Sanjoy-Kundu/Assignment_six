<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Task One</h1>

    <table class="table w-50 mx-auto">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php
        require_once "./db_store.php";

        $query = "SELECT * FROM products ORDER BY order_id DESC";
        $query_output = mysqli_query($db_con, $query);
    ?>
    <?php foreach($query_output as $query):?>
            
    <tr>

      <th scope="row"> <?php print_r($query["product_name"]) ?></th>
      <td> <?php print_r($query["quantity"]) ?></td>
      <td> <?php print_r($query["total_price"]) ?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>