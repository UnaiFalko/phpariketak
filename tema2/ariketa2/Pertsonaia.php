<?php
abstract class Pertsonaia
{
	protected $izena;
	protected $biziPuntuak;
	protected $indarra;
	protected $arintasuna;

	public function __construct($izena, $biziPuntuak, $indarra, $arintasuna)
	{
		$this->izena = $izena;
		$this->biziPuntuak = $biziPuntuak;
		$this->indarra = $indarra;
		$this->arintasuna = $arintasuna;
	}

	abstract public function mugitu();

	abstract public function erasoEgin();

	public function minaJaso($mina)
	{
		$this->biziPuntuak = max(0, $this->biziPuntuak - $mina);
		return $this->biziPuntuak;
	}

	public function getIzena()
	{
		return $this->izena;
	}

	public function getBiziPuntuak()
	{
		return $this->biziPuntuak;
	}
}