<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    // クラスを定義する
    class Food{
      // プロパティを定義する
      private $name;
      private $price;
      // メゾットを定義する
      public function show_price(int $price){
        $this->price = $price;
        echo '<br>'.$this->price;
      }
      // コンストラクタを定義する
      public function __construct(string $name,int $price){
        $this->name = $name;
        $this->price = $price;
      }
    }
    // クラスを定義する
    class Animal{
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;
      // メゾットと定義する
      public function show_height(int $height){
        $this->height = $height;
        echo '<br>'.$this->height;
      }
      // コンストラクタを定義する
      public function __construct(string $name,int $height,int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }
    // インスタンス化する
    $food = new Food('potato',250);
    // インスタンス化する
    $animal = new Animal('dog',60,5000);

    // インスタンス$foodの各プロパティの値を出力する
    print_r($food);
    // インスタンス$animalの各プロパティの値を出力する
    print_r($animal);

    // メゾットにアクセスして実行する
    $food->show_price(250);
    $animal->show_height(60);
    ?>
  </p>
  
</body>
</html>