<!DOCTYPE html>
<html>
  <head>
    <title>Hello</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
  </head>
  <body>
    <pre>
      <?php
      $adjectives = array("attractive", "pretty", "terrible", "sad");
      $randomIndex = array_rand($adjectives , 1);
      $adjective = $adjectives[$randomIndex];
      ?>
      <h1><?php echo("My, you're looking $adjective today!"); ?> </h1>
      <input type="button" onClick="history.go(0)" value="Refresh">
    </pre>
  </body>
</html>
