<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

/**
 * @property string|null ZahlungsartID
 */
class ZahlungsdienstleisterTyp
{
    final public const MAX_LENGTH_ZAHLUNGSART_ID = 50;
    final public const MAX_LENGTH_ZAHLUNGSVORGANG_ID = 50;

    public string $ZahlungsartID;
    public string $ZahlungsvorgangID;

    public function withZahlungsartID(?string $ZahlungsartID): ZahlungsdienstleisterTyp
    {
        $new = clone $this;
        if ($ZahlungsartID !== null) {
            Assert::maxLength($ZahlungsartID, self::MAX_LENGTH_ZAHLUNGSART_ID);
            $new->ZahlungsartID = $ZahlungsartID;
        }

        return $new;
    }

    public function withZahlungsvorgangID(string $ZahlungsvorgangID): ZahlungsdienstleisterTyp
    {
        Assert::maxLength($ZahlungsvorgangID, self::MAX_LENGTH_ZAHLUNGSVORGANG_ID);
        $new = clone $this;
        $new->ZahlungsvorgangID = $ZahlungsvorgangID;

        return $new;
    }
}