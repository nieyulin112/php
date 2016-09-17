<?php
class Human {
	public $name;
	public $height;
	public $weight;
	public function eat($food) {
		echo $this->name. "'s eating".$food."\n";
	}
}
$food = "米饭";
$human = new Human();
$human -> eat($food);
?>
