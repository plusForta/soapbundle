<?php


namespace PlusForta\RuVSoapBundle\Type;

class VersicherungsbedingungenEnumTyp
{
    /**
     * @var string
     */
    private string $Versicherungsbedingungen;

    public function withVersicherungsbedingungen($bedingung = 'Miet0422'): VersicherungsbedingungenEnumTyp
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
