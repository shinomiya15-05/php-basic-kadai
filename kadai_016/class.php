<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
      <?php
      class Food {

        // プロパティを定義
        public $name;
        public $price;
        
        // メソッドを定義
        public function show_price(int $price) {
          echo $this->price . '円' ;
        }

        // コンストラクタ
        public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
        }

      }
      

      class Animal {

        // プロパティを定義
        public $name;
        public $height;
        public $weight;

        // メソッドを定義
        public function show_height(int $height) {
          echo $this->height . 'cm';
        }

        public function show_weight(int $weight) {
          echo $this->weight . 'g';
        }
        // コンストラクタ
        public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        }
      }

      // インスタンス化する
      $food = new Food('potatop', 250);
      print_r($food);
      $animal = new Animal('dog', 60, 5000);
      print_r($animal);

      ?>
    </p>
</body>
</html>