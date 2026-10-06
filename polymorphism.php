<html>
<body>

<?php

class Fruit
{
    public function intro()
    {
        echo "I am a fruit.";
    }
}

class Apple extends Fruit
{
    public function intro()
    {
        echo "I am an Apple.";
    }
}

class Banana extends Fruit
{
    public function intro()
    {
        echo "I am a Banana.";
    }
}

$apple = new Apple();
$banana = new Banana();

$apple->intro();
echo "<br>";

$banana->intro();

?>

</body>
</html>
