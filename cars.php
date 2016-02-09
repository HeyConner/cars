<?php
    class Car
    {
      private $make;
      private $model;
      private $price;
      private $miles;

      $car->model == Ford;
      $car->setPrice(234);

      function getPrice()
      {
        return $this->price;
      }

      function setPrice($new_price)
      {
        $this->price = $new_price;
      }

      function __construct($make_brand, $model_type, $price_car, $mileage_car)
      {
        $this->make = $make_brand;
        $this->model = $model_type;
        $this->price = $price_car;
        $this->miles = $mileage_car;
      }
    }
    $first_car = new Car("Ford", "Silverado", 15000, 25000);
    $second_car = new Car("Mini", "Cooper", 9000, 55000);
    $third_car = new Car("Dodge", "Charger", 10000, 33000);

    $cars = array($first_car, $second_car, $third_car);

    $cars_matching_search = array();
    foreach ($cars as $vehicle) {
      if ($vehicle->price < $_GET["price"]) {
        array_push($cars_matching_search, $vehicle);
      }
    }
    // var_dump($cars_matching_search);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Cars Cars Cars</title>
  </head>
  <body>
    <div class="container">
      <h1>Cars!</h1>
      <?php
        foreach($cars_matching_search as $vehicle) {
          echo "<div class='row'>
          <div class='col-md-6'>
          </div>
            <div class='col-md-6'>
              <p>Make: $vehicle->make</p>
              <p>Model: $vehicle->model</p>
              <p>$$vehicle->getPrice()</p>
              <p>Miles:$vehicle->getMiles()</p>
            </div>
          </div>
          ";
        }
       ?>
    </div>
  </body>
</html>
