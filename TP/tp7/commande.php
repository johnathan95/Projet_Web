<?php
	class Commande{
		private $nomclient;
		private $quantite;
		private $prix;
		
		function __construct($nomclient, $quantite){
			$this->nomclient = $nomclient;
			$this->quantite = $quantite;
			$this->prix =0;
		}
		
		public function calculerPrix(){
			$this->prix = $this->quantite*10;
		}
		
		public function affiche() {
			echo "<p>Commande du client : "$this->nomclient."\nNombre de pizzas : ".$this->quantite."\nPrix total de la commande : ".$this->prix" euros</p>";
		}
	}
?>