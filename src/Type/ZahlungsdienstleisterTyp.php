<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

/**
 * @property string|null ZahlungsartID
 */
class ZahlungsdienstleisterTyp
{

    /**
     * @var string
     */
    private $ZahlungsvorgangID;

    public function withZahlungsartID(?string $ZahlungsartID): ZahlungsdienstleisterTyp
    {
        $new = clone $this;
        if ($ZahlungsartID !== null) {
            Assert::maxLength($ZahlungsartID, 50);
            $new->ZahlungsartID = $ZahlungsartID;
        }

        return $new;
    }

    public function withZahlungsvorgangID(string $ZahlungsvorgangID): ZahlungsdienstleisterTyp
    {
        Assert::maxLength($ZahlungsvorgangID, 50);
        $new = clone $this;
        $new->ZahlungsvorgangID = $ZahlungsvorgangID;

        return $new;
    }

}