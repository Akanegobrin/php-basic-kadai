<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>kadai_016</title>
</head>

<body>
  <p>
    <?php
    // クラスを定義する (Food)
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

       // メソッドを定義する
        public function show_price() {
        $this->price = 250;
        echo $this->price . '<br>';
        }

      // コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    // クラスを定義する (Animal)
    class Animal {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // メソッドを定義する
      public function show_height() {
      $this->height = 60;
      echo $this->height . '<br>';
     }

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // インスタンス化する (Food, Animal)
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);


    // インスタンス$food,$animalの各プロパティの値を出力する
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    // メソッドにアクセスして実行する
    $food->show_price();
    $animal->show_height();

    ?>
  </p>
</body>

</html>