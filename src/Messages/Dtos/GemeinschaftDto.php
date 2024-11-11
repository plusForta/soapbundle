<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;

class GemeinschaftDto
{
    /** @var string */
    public $anredeGemeinschaft;

    /** @var LesseeDto[] */
    public $lessees;

    /** @var AdresseDto */
    public $adresse;

    /** @var KontaktDto */
    public $kontaktdaten;
}
