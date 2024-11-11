<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;

class WerbewiderspruchDto
{
    /** @var bool */
    public $keineTelefonwerbung;

    /** @var bool */
    public $keineEMailWerbung;

    /** @var bool */
    public $keineDatenweitergab;

    /** @var bool */
    public $keineSchriftlicheWerbung;
}
