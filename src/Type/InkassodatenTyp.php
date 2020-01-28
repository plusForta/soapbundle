<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property ZahlungseinzugTyp Zahlungseinzug
 */
class InkassodatenTyp
{

    /**
     * @var string
     */
    private $Zahlungsweise;

    /**
     * @var string
     */
    private $Inkassoart;

    /**
     * @param ZahlungsweiseEnumTyp $Zahlungsweise
     * @return InkassodatenTyp
     */
    public function withZahlungsweise(ZahlungsweiseEnumTyp $Zahlungsweise): InkassodatenTyp
    {
        $new = clone $this;
        $new->Zahlungsweise = $Zahlungsweise->toString();

        return $new;
    }

    /**
     * @param InkassoartEnumTyp $Inkassoart
     * @return InkassodatenTyp
     */
    public function withInkassoart(InkassoartEnumTyp $Inkassoart): InkassodatenTyp
    {
        $new = clone $this;
        $new->Inkassoart = $Inkassoart->toString();

        return $new;
    }

    /**
     * @param BankverbindungTyp $Bankverbindung
     * @return InkassodatenTyp
     */
    public function withBankverbindung(BankverbindungTyp $Bankverbindung): InkassodatenTyp
    {
        $new = clone $this;
        $new->Zahlungseinzug = new \stdClass();
        $new->Zahlungseinzug->Bankverbindung = $Bankverbindung;
        return $new;
    }


    /**
     * @param ZahlungseinzugTyp|null $Zahlungseinzug
     * @return InkassodatenTyp
     */
    public function withZahlungseinzug(?ZahlungseinzugTyp $Zahlungseinzug): InkassodatenTyp
    {
        $new = clone $this;
        if ($Zahlungseinzug !== null) {
            $new->Zahlungseinzug = $Zahlungseinzug;
        }

        return $new;
    }


}

