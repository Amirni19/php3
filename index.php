<?php
class Animal{
    public $weight, $age, $color;
    public function __construct($weight, $age, $color){
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }
    function Info(){
        echo "Bec: $this->weight kилограмм; Boзpacт: $this->age лет; Окрас: $this->color<br>";
    }
}

class Lion extends Animal{
    public $maneSize;
public function __construct($weight, $age, $color, $maneSize)
{
parent::__construct($weight, $age, $color);
$this->maneSize = $maneSize; 
}
public function roar()
{
return "Это лев - царь зверей. Большой и рычит громко! Размер его гривы составляет: {$this->maneSize} см";
}
}

class Rabbit extends Animal{
    public $maneSize;
public function __construct($weight, $age, $color, $maneSize)
{
parent::__construct($weight, $age, $color);
$this->maneSize = $maneSize; 
}
public function roar1()
{
return "Это кролик - лесной зверь. Белый и пушистый с мокрым носиком! Размер его тела составляет: {$this->maneSize} см";
}
}

class Wolf extends Animal{
    public $maneSize;
public function __construct($weight, $age, $color, $maneSize)
{
parent::__construct($weight, $age, $color);
$this->maneSize = $maneSize; 
}
public function roar2()
{
return "Это волк - лесной хищник. Большое и серое животное, прирожденный охотник! Размер его туши составляет: {$this->maneSize} см";
}
}

$lion = new Lion (190, 8, "цвет охры", 30);
$rabbit = new Rabbit(2, 3, "сepый", 10);
$wolf = new Wolf(70, 5, "серо-белый", 12); 
echo '<div class="animal">';
echo '<h2>Лeв</h2>';
echo '<p class="info">' . $lion->Info() . "</p>"; echo "<p class='unique'>". $lion->roar() . "</p>";
echo "</div>";

echo '<div class="animal">';
echo '<h2>Заяц</h2>';
echo '<p class="info">' . $rabbit->Info() . "</p>"; echo "<p class='unique'>". $rabbit->roar1() . "</p>";
echo "</div>";

echo '<div class="animal">';
echo '<h2>Волк</h2>';
echo '<p class="info">' . $wolf->Info() . "</p>"; echo "<p class='unique'>". $wolf->roar2() . "</p>";
echo "</div>";
