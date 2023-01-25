<?php
/*
if (isset($_GET["name"])) {
$name = htmlentities($_GET["name"]);
echo $name;
}

if (isset($_REQUEST["name"])) {
$name  = htmlentities($_REQUEST["name"]);
$email = htmlentities($_REQUEST["email"]);
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $_SERVER["QUERY_STRING"];
}
 */

if (isset($_POST["name"])) {
 $name  = htmlentities($_POST["name"]);
 $email = htmlentities($_REQUEST["email"]);
 echo $name;
 echo "<br>";
 echo $email;
 echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTTP GET POST</title>
  </head>
  <body>
    <form action="index.php" method="POST">
      <div>
        <label>Name</label>
        <input type="text" name="name">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email">
      </div>
      <input type="submit" value="Submit">
    </form>

    <!-- <ul>
      <li>
        <a href="index.php?name=Eric">Eric</a>
      </li>
      <li>
        <a href="index.php?name=Julianto">Julianto</a>
      </li>
    </ul> -->
    <!-- <?php echo "{$name}'s profile"; ?> -->
  </body>
</html>
