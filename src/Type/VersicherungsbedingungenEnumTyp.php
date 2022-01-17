<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class VersicherungsbedingungenEnumTyp
{
    public const MIET_2018 = 'Miet2018';
    public const MIET_19_AB = 'Miet19AB';
    public const MIET_2019_AB = 'Miet2019AB';
    public const MIET_0819 = 'Miet0819';


    /**
     * @var string
     */
    private string $Versicherungsbedingungen;

    public function withVersicherungsbedingungen($bedingung = self::MIET_2018): VersicherungsbedingungenEnumTyp
    {
        Assert::oneOf($bedingung, [
            self::MIET_2018,
            self::MIET_19_AB,
            self::MIET_2019_AB,
            self::MIET_0819,
        ]);
        $new = clone $this;
        $new->Versicherungsbedingungen = $bedingung;

        return $new;
    }

    public function toString(): string
    {
        return $this->Versicherungsbedingungen;
    }
}