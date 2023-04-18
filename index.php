<!DOCTYPE html>
<html>
<body>
	<h1>Meu primeiro projeto</h1>

	<?php
	$str = "Ola mundo";
	echo "Ola mundo $str";
	
	$x = 5;
	$y = 10;

	
	function teste(){
		global $x, $y;
		//echo "<p>o x eh $x </p>";
		$y = $x + $y;
	}

	teste();
	echo "<p>o x fora do metodo eh $x </p>";
	echo "<p>o y fora do metodo eh $y </p>";


	for ($i=0; $i < 50; $i++) {
		echo $i;
	}
	echo "<br>";
	?>

	<?php
	$x = 5;
	$y = 10;


	function teste2(){
	global $x, $y;
		$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
	}
	teste2();
	echo "<br>";

	echo $y;
    
	$car = array("volvo", 123, 10.3);
	echo "<br> vardump: ";
	var_dump($car);
	?>

	<?php
	echo "<br> classe car: ";

	class Car{
		public $color;
		public $model;
		public function __construct($color, $model){
			$this->color = $color;
			$this->model = $model;
		}

		public function message(){
			return "atributos " . $this->color . " " . $this->model . "!";
		}
	}

	$car1 = new Car("black", "volvo");
	echo $car1 -> message();

	echo "<br>";

	$car1 = new Car("red", "toyota");
	echo $car1 -> message();

	?>

	
</body>
</html>