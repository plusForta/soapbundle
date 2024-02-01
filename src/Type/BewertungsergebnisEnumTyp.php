<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class BewertungsergebnisEnumTyp
{
    public const POSITIV = 'Positiv';
    public const NEGATIV = 'Negativ';
    public const PRUEFUNG = 'Pruefung';

    private string $Bewertungsergebnis;

    public function withBewertungsergebnis(string $Bewertungsergebnis): self
    {

        Assert::oneOf($Bewertungsergebnis, [
            self::POSITIV,
            self::NEGATIV,
            self::PRUEFUNG
        ]);

        $new = clone $this;
        $new->Bewertungsergebnis = $Bewertungsergebnis;
        return $new;
    }

    public function toString(): string
    {
        return $this->Bewertungsergebnis;
    }

}