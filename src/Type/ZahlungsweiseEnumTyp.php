<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class ZahlungsweiseEnumTyp
{
    const MONATLICH = 'monatlich';
    const JAEHRLICH = 'jaehrlich';
    const HALBJAEHRLICH = 'halbjaehrlich';
    const VIERTELJAEHRLICH = 'vierteljaehrlich';
    /**
     * @var string
     */
    private $Zahlungsweise;

    public function withZahlungsweise(string $zahlungsweise): ZahlungsweiseEnumTyp
    {
        Assert::oneOf($zahlungsweise, [
            self::MONATLICH,
            self::JAEHRLICH,
            self::HALBJAEHRLICH,
            self::VIERTELJAEHRLICH,
        ]);
        $new = clone $this;
        $new->Zahlungsweise = $zahlungsweise;

        return $new;
    }

    public function toString(): string
    {
        return $this->Zahlungsweise;
    }
}