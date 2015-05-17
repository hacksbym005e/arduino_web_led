<?php


$verz="1.0";
$comPort = "/dev/cu.usbmodemfa141"; /*change to correct com port */

$red = 0;
$green = 0;
$blue = 0;

function setLED($r, $g, $b)
{
     global $comPort;
     $fp =fopen($comPort, "w");
     sleep(2);
     fwrite($fp, 'R');
     fwrite($fp, $r);
     fwrite($fp, ',');
     fwrite($fp, 'G');
     fwrite($fp, $g);
     fwrite($fp, ',');
     fwrite($fp, 'B');
     fwrite($fp, $b);
     fclose($fp);
}

if (isset($_POST["set"])) {
  $rcmd = $_POST["set"];
   if(ctype_digit($_POST["red"]) && ctype_digit($_POST["green"]) && ctype_digit($_POST["blue"]) ) 
   {
      $red = $_POST["red"];
      $green = $_POST["green"];
      $blue = $_POST["blue"];

      setLED($red, $green, $blue);
   } 
}
elseif(isset($_GET["r"]) && ctype_digit($_GET["r"]) &&
       isset($_GET["g"]) && ctype_digit($_GET["g"]) &&
       isset($_GET["b"]) && ctype_digit($_GET["b"]))
{
    $red = $_GET["r"];
    $green = $_GET["g"];
    $blue = $_GET["b"];

    setLED($red, $green, $blue); 
}

?>
<html>
<body>

<center><h1>Arduino PHP Serial RGB controller</h1></center>
    <form method="post" action="<?php echo $PHP_SELF;?>">
    Red:<input type="text" id="red" name="red" />&nbsp
    Green:<input type="text" id="green" name="green" />&nbsp
    Blue:<input type="text" id="blue" name="blue" />&nbsp
    <input type="submit" value="Set" id="set" name="set" />
    </form>
<br />
<br />
<br />
<br />
<br />
<br />

</form>
</body>
</html>