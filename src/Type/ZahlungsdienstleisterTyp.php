<?php


namespace PlusForta\RuVSoapBundle\Type;


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
            $new->ZahlungsartID = $ZahlungsartID;
        }

        return $new;
    }

    public function withZahlungsvorgangID(string $ZahlungsvorgangID): ZahlungsdienstleisterTyp
    {
        $new = clone $this;
        $new->ZahlungsvorgangID = $ZahlungsvorgangID;

        return $new;
    }

}