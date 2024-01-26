<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class ZahlungsweiseEnumTyp
{
    final public const MONATLICH = 'monatlich';
    final public const JAEHRLICH = 'jaehrlich';
    final public const HALBJAEHRLICH = 'halbjaehrlich';
    final public const VIERTELJAEHRLICH = 'vierteljaehrlich';

    private string $Zahlungsweise;

    public function withZahlungsweise(string $zahlungsweise): self
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