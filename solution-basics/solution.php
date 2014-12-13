<?php 
if (isset($_GET['submit']))
{
  // user submitted
  $n = $_GET['number'];
  $fibo = fibo($n);
  
  echo "<h3> Here is your series</h3>";
  echo "<p>";
  for ($i = 0; $i < sizeof($fibo); $i++)
  {
    echo $fibo[$i];
    if ($i < sizeof($fibo) - 1) {
      echo ", ";
    }
  }
  echo "</p>";
}
?>
<!DOCTYPE html>
<html>
  <title>The fibo generator</title>
  <meta charset="utf-8">
  <body>
   <?php form(); ?>
  </body>
</html>

<?php

function fibo($n)
{
  $fibo = array();
  for ($i = 0; $i < $n; $i++) {
    if ($i < 2) {
      $fibo[$i] = 1;
    } else {
      $fibo[$i] = $fibo[$i-2] + $fibo[$i-1];
    }
  }
  return $fibo;
}

// it is recommended, even for HTML content, that
// you use a php function to build it. This is for
// better management
// -- Using echo  $_SERVER['PHP_SELF']; is
// because I don't want to redirect to another page
// to handle the data submitted in the form; So I am
// pointing the action to this page itself
function form() 
{
?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <input type="number" width="40px" name="number">
    <input type="submit" value="SUBMIT" name="submit">
  </form>
<?php
}
?>
