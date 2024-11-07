<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;

class StelleAntragDto
{
    /**
     * @var KennungDto
     */
    public $kennung;

    /** @var bool */
    public $bonitaetspruefungDurhchfuehren;

    /**
     * @var AntragMietkautionDto
     */
    public $antragMietkaution;
}
