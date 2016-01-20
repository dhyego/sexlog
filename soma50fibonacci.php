<?php
	class Fibonacci {

		private $num_termos; //Representa o número de termos já calculados
		private $termos; //Termos calculados

		function __construct() {
			$this->termos = array(0,1);
			$this->num_termos = 2;
		}

		public function calcula($n) {
			for ($i=$this->num_termos;$i<$n;$i++)
				$this->termos[$i] = $this->termos[$i-1] + $this->termos[$i-2];
			$this->num_termos = $n;
		}

		/**
		 * Retorna o enésimo termo da sequência de Fibonacci
		 */
		public function termo($n) {
			if ($n > $this->num_termos) $this->calcula($n);
			return $this->termos[$n-1];
		}

		/**
		 * Retorna a soma dos enésimos termos da sequência de Fibonacci
		 */
		public function soma($n) {
			return $this->termo($n+2)-1;
		}

		/**
		 * Imprime os termos calculados
		 */
		private function debug() {
			for ($i=0;$i<$this->num_termos;$i++)
				echo "Posição $i valor " . $this->termos[$i] . "<br>";
		}
	}

	$F = new Fibonacci();
	echo "Soma dos 50 primeiros termos da sequência de Fibonacci -> <a href=\"https://sexlog.com/prova_" . $F->soma(50) . "\">" . $F->soma(50) . "</a>";
?>
