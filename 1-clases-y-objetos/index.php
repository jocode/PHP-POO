<?php 

class Persona {

	//Atributos
	public $nombre = 'Juanito';

	//Métodos
	public function hablar($mensaje){
		echo $mensaje;
	}

}

//Objetos
# $persona esta instanciando a la clase Persona
$persona = new Persona();
$persona->nombre;
$persona->hablar('Hola, estoy hablando');

 ?>