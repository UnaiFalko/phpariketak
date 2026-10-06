<?php
require_once __DIR__ . '/Pertsonaia.php';

abstract class Etsaia extends Pertsonaia
{
	protected $boterea;

	public function __construct($izena, $biziPuntuak, $indarra, $arintasuna, $boterea)
	{
		parent::__construct($izena, $biziPuntuak, $indarra, $arintasuna);
		$this->boterea = $boterea;
	}
}