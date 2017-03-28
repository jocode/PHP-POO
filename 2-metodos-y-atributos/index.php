<?php 

class Persona {

	//Atributos
	public $nombre = array();
	public $apellido = array();

	//Métodos
	public function guardar($nombre, $apellido){
		$this->nombre[] = $nombre;
		$this->apellido[] = $apellido;
	}

	public function mostrar(){
		for ($i = 0; $i < count($this->nombre); $i++){
			self::formato($this->nombre[$i], $this->apellido[$i]);
		}
	}

	public function formato($nombre, $apellido){
		echo "Nombre: ".$nombre."\n<br>";
		echo "Apellido: ".$apellido."\n<br>";
	}

}
	$persona = new Persona();
	$persona->guardar('Benito', 'Juarez');
	$persona->guardar('Pepito', 'Pimentel');
	$persona->mostrar();

?>