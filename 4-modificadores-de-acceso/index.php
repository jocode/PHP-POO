<?php 
header('Content-Type: text/html; charset=UTF-8');
#Los Modificadores de Acceso: Son propiedades que se pueden ser añadidos a los métodos y atributos para el acceso y la extraccion de esas propiedades.

class Facebook {

	//Atributos
	public $nombre;
	public $edad;
	private $pass;

	//Métodos
	public function __construct($nombre, $edad, $pass){
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->pass = $pass;
	}

	public function verInformacion(){
		echo 'Nombre      : '.$this->nombre.'<br>';
		echo 'Edad        : '.$this->edad.'<br>';
		$this->cambiarPass('56677513');
		echo 'Contraseña  : '.$this->pass.'<br>';
	}

	private function cambiarPass($pass){
		$this->pass = $pass;
	}
}

$facebook = new Facebook('Juancharraquiado', 10, 'xxxxx');
$facebook->verInformacion();

?>