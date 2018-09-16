<?php
	include_once("connect2.php");

	class SQLI {
		private $conn;

		public function __construct() {
			$this -> conn = mysqli_connect(HOST, USUARIO, SENHA, BANCO);
			
		}
		public function __count() {
			mysqli_num_rows($this -> conn);
		}
		
		public function executar($query) {
			return mysqli_query($this -> conn, $query);
		}
		public function consultar($query) {
			$resultado = mysqli_query($this->conn, $query);
			$dados = array();
			while ($item = mysqli_fetch_array($resultado)) {
				$dados[] = $item;
			}
			return $dados;
		}
		public function pesquisar($query){
			$resultado = mysqli_query($this->conn, $query);
			while ($item = mysqli_fetch_array($resultado)) {
				return $item;
			}
		}
	}
?>
