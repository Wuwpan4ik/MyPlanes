<?php  
	abstract class plane {
		private $weight;
		private $speed;
		private $length;
		private $condition;
		public function __construct($weight, $speed, $length) {
			$this.$weight = $weight;
			$this.$speed = $speed;
			$this.$length = $length;
			$this.$condition = 'На земле';
		}
		function getWeight() {
			echo $this.$weight;
		}
		function getSpeed() {
			echo $this.$speed;
		}
		function getLength() {
			echo $this.$length;
		}
		function onUpper() {
			if ($this.$condition == 'На земле') {
				echo 'Самолёт взлетел';
				$this.$condition = 'В полёте';
			} else {
				echo 'Самолёт не может взлететь, когда он уже летит';
			}
		}
		function onDown() {
			if ($this.$condition == 'В полёте') {
				echo 'Самолёт сел';
				$this.$condition = 'На земле';
			} else {
				echo 'Самолёт не может сесть, если он не летит';
			}
		}
		function onRight() {
			echo 'Самолёт поворачивает напрво';
		}
		function onLeft() {
			echo 'Самолёт поворачивает налево';
		}
	}

	class MIG extends plane {
		function fire() {
			echo 'Самолёт стреляет..';
		}
	}
	class TU_154 extends plane {

	}
	$firstMIG = new MIG(10800, 1800, 17.37);
	$firstTu = new TU_154(50775, 900, 47.90);
?>