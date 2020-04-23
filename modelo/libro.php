<?php
	class Libro{
		private $id;//esta de mas

		private $Nombre;
		private $Direccion;
		private $CP;

		private $Categoria;
		private $Telefono;
		private $rfc;

		private $ciudad;
		private $estado;
		private $pais;

//----------------------------------------------1
		function __construct(){}
		public function getNombre(){
		return $this->Nombre;
		}
		public function setNombre($Nombre){
			$this->Nombre = $Nombre;
		}


		public function getDireccion(){
			return $this->Direccion;
		}
		public function setDireccion($Direccion){
			$this->Direccion = $Direccion;
		}

		public function getCodigo(){
		return $this->CP;
		}
		public function setCodigo($CP){
			$this->CP = $CP;
		}



//------------------------------------------------3
		public function getCategoria(){
		return $this->Categoria;
		}
		public function setCategoria($Categoria){
			$this->Categoria = $Categoria;
		}


		public function getTelefono(){
			return $this->Telefono;
		}
		public function setTelefono($Telefono){
			$this->Telefono = $Telefono;
		}

		public function getRfc(){
		return $this->rfc;
		}
		public function setRfc($rfc){
			$this->rfc = $rfc;
		}

//---------------------------------------------------6
	
		public function getCiudad(){
		return $this->ciudad;
		}
		public function setCiudad($ciudad){
			$this->ciudad = $ciudad;
		}

		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}

		public function getPais(){
		return $this->pais;
		}
		public function setPais($pais){
			$this->pais = $pais;
		}

//------------------------------------------9



		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
	}
?>