<?php
require_once __DIR__ . '/Pertsonaia.php';
require_once __DIR__ . '/Salto.php';

class Luigi extends Pertsonaia implements Salto
{
	private $gaitasunBerezia;

	public function __construct($izena, $biziPuntuak, $indarra, $arintasuna, $gaitasunBerezia)
	{
		parent::__construct($izena, $biziPuntuak, $indarra, $arintasuna);
		$this->gaitasunBerezia = $gaitasunBerezia;
	}

	public function mugitu()
	{
		return 'Luigi mugitu da';
	}

	public function erasoEgin()
	{
		return $this->indarra + $this->arintasuna;
	}

	public function saltoEgin()
	{
		return $this->indarra * $this->arintasuna;
	}

	public function getGaitasunBerezia()
	{
		return $this->gaitasunBerezia;
	}
}