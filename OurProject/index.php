<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="res/css/style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="leftHead">

    </div>
    <div class="centerHead">
      <h2>Php Learn</h2>
    </div>
    <div class="rightHead">
      <form class="asasa" action="login.php" method="get">
        <b>Email</b><input type="text" name="email" value="">
        <br>
        <b>Password</b><input type="password" name="password" value="">
        <br>
        <input type="submit" name="submit" value="submit">
      </form>
    </div>
    <div class="bodyLeft">
      <ul>
      <?php include "res/php/darslar.php";
            $arrayDarsSize = sizeof($darsSoni);
            for($x=0; $x<$arrayDarsSize; $x++)
            {
                echo "<a href=\"#\"><li>".$darsSoni[$x]."</li></a>";
            }

       ?>
      </ul>
    </div>

  </body>
</html>
