<?php
// 型宣言と異なるデータ型の場合にエラーを発生させる
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        //配列ソート T:昇順 F:降順
        function sort_2way(array $array, bool $order){
            if($order === true){
                echo "昇順にソートします<br>";
                sort($array);
            }
            else{
                echo "降順にソートします<br>";
                rsort($array);
            }
            foreach($array as $num){
                echo $num."<br>";
            }
        }

        //ソートする配列を宣言
        $nums=[15,4,18,23,10];
        //呼び出し
        sort_2way($nums, true);
        sort_2way($nums, false);

        ?>
    </p>
</body>

</html>