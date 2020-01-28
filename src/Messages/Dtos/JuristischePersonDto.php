<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;


class JuristischePersonDto
{

    /** @var string */
    public $anrede;

    /** @var string */
    public $name;

    /** @var string */
    public $namenszusatz;

    /** @var AdresseDto */
    public $adresse;

    /** @var string */
    public $postfach;


}