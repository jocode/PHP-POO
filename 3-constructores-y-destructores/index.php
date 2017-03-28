<?php 

class Loteria {

	#Atributos
	public $numero;
	public $intentos;
	public $resultado = false;

	#Métodos
	/*Los métodos constructores se inician apenas se instancia la clase, y debe ser de publico y no devuelve valores*/
	public function __construct($numero, $intentos){
		$this->numero = $numero;
		$this->intentos = $intentos;
	}

	public function sortear(){
		$minimo = $this->numero / 2;
		$maximo = $this->numero * 2;

		for ($i = 0; $i < $this->intentos; $i++){
			$int = rand($minimo, $maximo);
			self::intentos($int);
		}
	}

	public function intentos($int){
		if ($int == $this->numero){
			print "<b>".$int." == ".$this->numero."</b><br/>";
			$this->resultado = true;
		} else {
			echo $int . " != ".$this->numero.'<br/>';
		}
	}

	public function __destruct(){
		if($this->resultado){
			echo "¡Felicidades! Has ganado en  ".$this->intentos." intentos.";
		} else {
			echo "Oh, has perdido ".$this->intentos." intentos";
		}
	}
}

$loteria = new Loteria(10, 10);
$loteria->sortear();

?>