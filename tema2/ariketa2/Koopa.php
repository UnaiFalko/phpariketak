<?php
require_once __DIR__ . '/Etsaia.php';

class Koopa extends Etsaia
{
	private $azkartasuna;
	private $oskolBerdeaDa;

	public function __construct($izena, $biziPuntuak, $indarra, $arintasuna, $boterea, $azkartasuna, $oskolBerdeaDa)
	{
		parent::__construct($izena, $biziPuntuak, $indarra, $arintasuna, $boterea);
		$this->azkartasuna = $azkartasuna;
		$this->oskolBerdeaDa = $oskolBerdeaDa;
	}

	public function mugitu()
	{
		return 'Koopa mugitu da';
	}

	public function erasoEgin()
	{
		return $this->oskolBerdeaDa ? $this->azkartasuna * 2 : $this->azkartasuna;
	}
}