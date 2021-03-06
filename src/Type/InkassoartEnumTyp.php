<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class InkassoartEnumTyp
{
    const LASTSCHRIFT = 'Lastschrift';
    const SELBSTZAHLER = 'Selbstzahler';
    const ZAHLUNGSDIENSTLEISTER = 'Zahlungsdienstleister';
    /**
     * @var string
     */
    private $Inkassoart;

    public function withInkassoart(string $inkassoart): InkassoartEnumTyp
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