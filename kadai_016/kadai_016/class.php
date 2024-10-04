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
    // クラスの定義
    class Food{
      // プロパティを定義する
      private $name;
      private $price;
      
      // メゾットを定義する
      public function show_price(){
        echo '<br>'.$this->price.'<br>';
      }
      // コンストラクタを定義する
      public function __construct(string $name,int $price){
        $this->name = $name;
        $this->price = $price;
      }
    }
    // クラスを定義
    class Animal{
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;
      // コンストラクタを定義する
      public function __construct(string $name,int $height,int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;      
      }
      // メゾットと定義する
      public function show_height(){
        echo $this->height.'<br>';
      }
  }
    // インスタンス化する
    $food = new Food('potato',250);
    $animal = new Animal('dog',60,5000);
    // インスタンス$shampooの各プロパティの値を出力する
    print_r($food);
    print_r($animal);
    // メゾットにアクセスして実行する
    $food->show_price();
    $animal->show_height();
    ?>
  </p>  
</body>
</html>