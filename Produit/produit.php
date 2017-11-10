<?php 

	class Produit{
		protected $nombre;
		protected $poids;
		
		public function __construct ($nombre ,$poids ) {
			$this->nombre = $nombre;
			$this->poids = $poids;
		}
		
		public abstract function calcul_prix() ;
		
		public static function nombre_produit {
			$nombre_produit=0;
		}
	}
	
	class ProduitKilo{
		private $prix_kilo;
		
		public function ProduitKilo($nombre ,$poids, $prix_kilo ) {
			parent::__construct($nombre ,$poids);
			$this->prix_kilo = $prix_kilo;
		}
		
		public function calcul_prix() {
			return ($this->poids*$this->prix_kilo);
		}
	}
	
	class ProduitUnite{
		private $prix_unite;
		
		public function ProduitUnite($nombre ,$poids, $prix_unite ) {
			parent::__construct($nombre ,$poids);
			$this->prix_unite = $prix_unite;
		}
		
		public function calcul_prix() {
			return ($this->nombre*$this->prix_unite);
		}
	}
	
?>