<?php $TITLE = "Numbers"; ?>
<?php include(dirname(__FILE__) . '/header.php'); ?>
<h1>Here are some numbers</h1>
<?php
  foreach (range(1, 10) as $num) {
    echo "$num<br>";
  }
?>
<p>You can go back to the <a href="index.php">home page</a>.</p>
<?php include(dirname(__FILE__) . '/footer.php'); ?>
