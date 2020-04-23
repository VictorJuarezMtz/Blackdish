<?php
// incluye la clase Db
require_once('conexion.php');
	class CrudLibro{
		// constructor de la clase
		public function __construct(){}
		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($libro){
			$db=Db::conectar();
$insert=$db->prepare('INSERT INTO restaurantes (idRestaurante, Nombre, Direccion,CP,  Telefono,Categoria,estado,pais,ciudad,rfc)values(NULL,:Nombre,:Direccion,:CP,:Telefono, :Categoria,:estado,:pais,:ciudad,:rfc)');
				$insert->bindValue('Nombre',$libro->getNombre());
				$insert->bindValue('Direccion',$libro->getDireccion());
				$insert->bindValue('CP',$libro->getCodigo());

		        $insert->bindValue('Telefono',$libro->getTelefono());
			    $insert->bindValue('Categoria',$libro->getCategoria());
				$insert->bindValue('estado',$libro->getEstado());

		        $insert->bindValue('pais',$libro->getPais());
				$insert->bindValue('ciudad',$libro->getCiudad());
				$insert->bindValue('rfc',$libro->getRfc());
			$insert->execute();

		}


	


	
	}
?>