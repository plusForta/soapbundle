<?php


namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class InkassoartEnumTyp
{
    public const LASTSCHRIFT = 'Lastschrift';
    public const SELBSTZAHLER = 'Selbstzahler';
    public const ZAHLUNGSDIENSTLEISTER = 'Zahlungsdienstleister';

    private string $Inkassoart;

    public function withInkassoart(string $inkassoart): self
    {
        $new = clone $this;
        Assert::oneOf($inkassoart, [
            self::LASTSCHRIFT,
            self::SELBSTZAHLER,
            self::ZAHLUNGSDIENSTLEISTER,
        ]);
        $new->Inkassoart = $inkassoart;

        return $new;
    }

    public function toString(): string
    {
        return $this->Inkassoart;
    }
}
