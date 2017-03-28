<?php 

class Vehiculo {


	//Atributos
	public $motor = false;
	public $color;
	public $marca;


	//Métodos
	protected function estado(){
		if($this->motor){
			echo 'El motor está encedido<br/>';
		} else {
			echo "El motor está apagado<br/>";
		}
	}

	public function encender(){
		echo 'El motor se está encendiendo<br/>';
		$this->motor = true;
	}

	public function apagar(){
		echo 'El motor se está apagando<br/>';
		$this->motor = false;
	}
}

class Moto extends Vehiculo {

	public function estadoMoto(){
		$this->estado();
	}

}

class Cuatrimoto extends Moto {

}

$moto = new Cuatrimoto();
$moto->estadoMoto();
/*
$vehiculo = new Vehiculo();
$vehiculo->estado();
$vehiculo->encender();
$vehiculo->estado();
$vehiculo->apagar();
$vehiculo->estado();
*/

?>