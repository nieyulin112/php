<?php
	class Player {
		public $name = 'nyl';

		public $height  = '198cm';

		public function run () {
			echo "running\n";
		}
		public function pass () {
			echo "pass\n";
		}
		// 构造函数，实例的初始化
		function __construct($weight, $number) {
			$this -> number = $number;
			$this -> weight = $weight;
		}
	}
	// 实例化对象
	$jordan = new Player(120, 23);
	echo $jordan -> name . "\n";
	// 方法的调用
	$jordan -> run();
	echo $jordan -> height . "\n";

	echo $jordan -> weight . "\n";
	echo $jordan -> number . "\n";

	// 初始化对象
	$jams = new Player (130, 6);
	echo $jams -> weight . "\n";
	echo $jams -> number . "\n";

?>
