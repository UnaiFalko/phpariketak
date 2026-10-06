<?php
require_once __DIR__ . '/Etsaia.php';

class Goomba extends Etsaia
{
	private $azkartasuna;

	public function __construct($izena, $biziPuntuak, $indarra, $arintasuna, $boterea, $azkartasuna)
	{
		parent::__construct($izena, $biziPuntuak, $indarra, $arintasuna, $boterea);
		$this->azkartasuna = $azkartasuna;
	}

	public function mugitu()
	{
		return 'Goomba mugitu da';
	}

	public function erasoEgin()
	{
		return $this->azkartasuna + $this->boterea;
	}
}