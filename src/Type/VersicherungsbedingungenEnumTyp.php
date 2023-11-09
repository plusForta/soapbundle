<?php

namespace PlusForta\RuVSoapBundle\Type;

class VersicherungsbedingungenEnumTyp
{
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