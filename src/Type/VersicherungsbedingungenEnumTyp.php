<?php


namespace PlusForta\RuVSoapBundle\Type;

class VersicherungsbedingungenEnumTyp
{
    private string $Versicherungsbedingungen;

    public function withVersicherungsbedingungen(string $bedingung = 'Miet0422'): self
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