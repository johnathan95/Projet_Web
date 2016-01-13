<?php
	class Calcul {
	private $nombre1 ;
	public $nombre2 ;
		
		function __construct($nb1,$nb2) {
			$this->nombre1 = $nb1;
			$this->nombre2 = $nb2;
		}
		public function affiche() {
			echo $this->nombre1." ".$this->nombre2 ;
		}
		public function addition()
		{
			echo $this->nombre1 + $this->nombre2;
		}

		public function soustraction()
		{
			echo $this->nombre1 - $this->nombre2;
		}

		public function multiplication()
		{
			echo $this->nombre1 * $this->nombre2;
		}

	}

?>