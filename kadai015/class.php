<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>クラスを２つ作ろう</title>
</head>
<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function set_price(int $price) {
        $this->price = $price;
      }
      public function show_price() {
        echo $this->price . '<br>';
      }
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function set_height(int $height) {
        $this->height = $height;
      }
      public function show_height() {
        echo $this->height . '<br>';
      }
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      } 
    }

    $potato = new Food('potato', 250);
    $dog = new Animal('dog', 60, 5000);

    print_r($potato);
    print_r($dog);
    
    $potato->set_price(250);
    $potato->show_price();

    $dog->set_height(60);
    $dog->show_height();

    ?>
  </p>
  
</body>
</html>
