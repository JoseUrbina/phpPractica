<?php 
	class Coche
	{
		protected $ruedas;
		protected $color;
		protected $motor;

		function __construct()
		{
			$this->ruedas = 4;
			$this->color = "Red";
			$this->motor = "V8";
		}

		function Arrancar()
		{
			echo "Estoy arrancando";
		}

		function Girar()
		{
			echo "Estoy girando";
		}

		function Frenar()
		{
			echo "Estoy frenando";
		}

		public function getRuedas()
		{
			return $this->ruedas;
		}

		public function setRuedas($_ruedas)
		{
			$this->ruedas = $_ruedas;
		}

		public function getColor()
		{
			return $this->color;
		}

		public function setColor($_color)
		{
			$this->color = $_color;
		}

		public function getMotor()
		{
			return $this->motor;
		}

		public function setMotor($_motor)
		{
			$this->motor = $_motor;
		}
	}

	class Camion extends Coche
	{
		function __construct()
		{
			$this->ruedas = 8;
			$this->color = "Green";
			$this->motor = "V9";
		}

		function Arrancar()
        {
            // Ejecuta la función del padre
            parent::Arrancar();
            echo "<br> Soy un camión";
        }
    }