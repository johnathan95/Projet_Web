<?php
	class Bd{
		private $co;
		
		function __construct(){
			$this->connect();
		}
		
		function connect(){
			$this->co = mysqli_connect("localhost" ,"root" , "", "stagio") ;
		}
		
		function diconnect(){
			mysqli_close($this->co);
		}
		
		function getco(){
			return $this->co;
		}
	}
?>