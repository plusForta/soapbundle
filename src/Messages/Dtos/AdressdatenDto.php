<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;


class AdressdatenDto
{


    /** @var NatuerlichePersonDto|JuristischePersonDto */
    public $empfaenger;

    /** @var NatuerlichePersonDto|GemeinschaftDto */
    public $versicherungsnehmer;

    /** @var NatuerlichePersonDto|JuristischePersonDto */
    public $vermieter;

    /** @var MietobjektDto */
    public $mietobject;
}