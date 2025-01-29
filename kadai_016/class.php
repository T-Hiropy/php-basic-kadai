<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編kadai_016</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義
        class Food {
            private $name;
            private $price;
            // メソッド:入力
            public function input_name(string $new_name){
                $this->name = $new_name;
            }
            public function input_price(int $new_price){
                $this->price = $new_price;
            }
            // メソッド：出力
            public function show_price(){
                echo $this->price.'<br>';
            }
            // コンストラクタ
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            } 
        }

        class Animal{
            private $name;
            private $height;
            private $weight;
            // メソッド:入力
            public function input_name(string $new_name){
                $this->name = $new_name;
            }
            public function input_height(float $new_height){
                $this->height = $new_height;
            }
            public function input_weight(float $new_weight){
                $this->weight = $new_weight;
            }
            // メソッド：出力
            public function show_height(){
                echo $this->height.'<br>';
            }
            // コンストラクタ
            public function __construct(string $name, float $height, float $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            } 
        }

        // インスタンス化
        $sampleFood = new Food('potato', 250);
        $sampleAnimal = new Animal('dog', 60, 5000);


        // インスタンス出力
        print_r($sampleFood);
        echo '<br>';
        print_r($sampleAnimal);
        echo '<br>';

        // メソッド呼び出し
        $sampleFood->show_price();
        $sampleAnimal->show_height();

        // // 入力
        // $sampleFood->input_name('Banana');
        // $sampleFood->input_price(250);
        // $sampleAnimal->input_name('Cat');
        // $sampleAnimal->input_height(33.55);
        // $sampleAnimal->input_weight(8.9);

        // // インスタンス出力
        // print_r($sampleFood);
        // echo '<br>';
        // print_r($sampleAnimal);
        // echo '<br>';

       ?>
   </p>
</body>

</html>