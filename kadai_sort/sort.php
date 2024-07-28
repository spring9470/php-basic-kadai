<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php基礎編</title>
</head>
<body>
  <p>
    <?php    
    function sort_2way($array,$order){
      if($order){
        echo '昇順にソートします。.<br>'; 
        sort($array);
      }else{
        echo '降順にソートします。.<br>';
        rsort($array);
      }
      foreach($array as $num){
        echo $num . "<br>";
      }
    }
    $nums = [15,4,18,23,10];
    sort_2way($nums,TRUE);
    sort_2way($nums,FALSE);











    // ソートする配列を宣言
    // $nums = [15,4,18,23,10];
    // sort($nums);
    // rsort($nums);

    // foreach($nums as $num){
      // echo $num . "<br>";
    // }
  
    // function sort_2way($array,$order){
    
    // $nums = [15,4,18,23,10];
    // sort($nums);
    // rsort($nums);
    // $order = SORT_REGULAR;
    // $order = SORT_ASC;


    // foreach($nums as $order){
      // echo $order . "<br>";
    // } 
      // if($order == SORT_ASC){
      // if($order == SORT_REGULAR){
      // if($order == true){
        
        
        // echo '昇順にソートします。';
        // $order = FALSE;
      // }else{
        // echo '降順にソートします。';
      // }
      // $nums = [15,4,18,23,10];
      // sort($nums);
      // foreach($nums as $num){
        // echo $num . "<br>";
      // }
    // }
    // sort_2way($num,1);
    // $nums = [15,4,18,23,10];
      // sort($nums);
    // sort_2way($nums,rsort);
    
    
    ?>
  </p>
  
</body>
</html>