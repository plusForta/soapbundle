<?php


namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class ZahlungsweiseEnumTyp
{
    public const MONATLICH = 'monatlich';
    public const JAEHRLICH = 'jaehrlich';
    public const HALBJAEHRLICH = 'halbjaehrlich';
    public const VIERTELJAEHRLICH = 'vierteljaehrlich';
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
