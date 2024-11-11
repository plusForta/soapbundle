<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class TarifdatenTyp
{
    /**
     * @var string
     */
    private $Versicherungsbedingungen;

    /**
     * @var float
     */
    private $Buergschaftssumme;

    /**
     * @var float
     */
    private $Jahresbeitrag;

    /**
     * @param VersicherungsbedingungenEnumTyp $Versicherungsbedingungen
     * @return TarifdatenTyp
     */
    public function withVersicherungsbedingungen(VersicherungsbedingungenEnumTyp $Versicherungsbedingungen): TarifdatenTyp
    {
        $new = clone $this;
        $new->Versicherungsbedingungen = $Versicherungsbedingungen->toString();

        return $new;
    }

    /**
     * @param float $Buergschaftssumme
     * @return TarifdatenTyp
     */
    public function withBuergschaftssumme(float $Buergschaftssumme): TarifdatenTyp
    {
        Assert::greaterThan($Buergschaftssumme, 0.0);

        $new = clone $this;
        $new->Buergschaftssumme = round($Buergschaftssumme, 2);

        return $new;
    }

    /**
     * @param float $Jahresbeitrag
     * @return TarifdatenTyp
     */
    public function withJahresbeitrag(float $Jahresbeitrag): TarifdatenTyp
    {
        Assert::greaterThan($Jahresbeitrag, 0.0);

        $new = clone $this;
        $new->Jahresbeitrag = round($Jahresbeitrag, 2);

        return $new;
    }
}
