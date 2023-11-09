<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class VersicherungsbedingungenEnumTyp
{

    /**
     * @var string
     */
    private string $Versicherungsbedingungen;

    public function withVersicherungsbedingungen($bedingung = 'MIET0422'): VersicherungsbedingungenEnumTyp
    {
        $new = clone $this;
        $new->Versicherungsbedingungen = $bedingung;

        return $new;
    }

    public function toString(): string
    {
        return $this->Versicherungsbedingungen;
    }
}