<?php

$today = date('Y-m-d H:i:s l');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <p>Hello, PHP!</p>
  <p>Today: <?= date('Y-m-d H:i:s l'); ?> </p>
  <p>Today: <?= $today; ?> </p>
</body>
</html>