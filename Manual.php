<?php  

	Class Manual{
		private $embreagem;

		public function pisarNaEmbreagem($embreagem)
		{
			$this->embreagem = True;
		}

		public function soltarEmbreagem($embreagem)
		{
			$this->embreagem = False;
		}

		function __construct($embreagem){
			
		}

	}


?>