<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;

class NatuerlichePersonDto
{
    /** @var string */
    public $anrede;

    /** @var string */
    public $titel;

    /** @var string */
    public $vorname;

    /** @var string */
    public $nachname;

    /** @var string */
    public $namenszusatz;

    /** @var AdresseDto */
    public $adresse;

    /** @var KontaktDto */
    public $kontaktdaten;

    /** @var \DateTimeImmutable */
    public $geburtsdatum;

    /** @var string */
    public $nationalitaet;
}
