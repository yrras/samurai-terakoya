<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題</title>
</head>

<body>

  <?php
  $nums = [15, 4, 18, 23, 10];

  function sort_2way($array, $order)
  {
    if ($order) {
      // trueの場合
      echo '昇順にソートします。<br>';
      sort($array, SORT_NUMERIC);
    } else {
      // falseの場合
      echo '降順にソートします。 <br>';
      rsort($array, SORT_NUMERIC);
    };

    foreach ($array as $element) {
      echo $element . '<br>';
    }
  };

  sort_2way($nums, true);

  sort_2way($nums, false);

  ?>
</body>

</html>