<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class VersicherungsbedingungenEnumTyp
{
    const MIET_2018 = 'Miet2018';
    const MIET_2019_AB = 'Miet19AB';

    /**
     * @var string
     */
    private $Versicherungsbedingungen;

    public function withVersicherungsbedingungen($bedingung = self::MIET_2018): VersicherungsbedingungenEnumTyp
    {
        Assert::oneOf($bedingung, [
            self::MIET_2018,
            self::MIET_2019_AB,
            'Miet2019AB',
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