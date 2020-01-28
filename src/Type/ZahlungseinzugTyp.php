<?php


namespace PlusForta\RuVSoapBundle\Type;


/**
 * @property BankverbindungTyp|null $Bankverbindung
 * @property ZahlungsdienstleisterTyp|null $Zahlungsdienstleister
 */
class ZahlungseinzugTyp
{

    public function withBankverbindung(?BankverbindungTyp $Bankverbindung): ZahlungseinzugTyp
    {
        $new = clone $this;
        if ($Bankverbindung !== null) {
            $new->Bankverbindung = $Bankverbindung;
        }

        return $new;
    }

    public function withZahlungsdienstleister(?ZahlungsdienstleisterTyp $Zahlungsdienstleister): ZahlungseinzugTyp
    {
        $new = clone $this;
        if ($Zahlungsdienstleister !== null) {
            $new->Zahlungsdienstleister = $Zahlungsdienstleister;
        }

        return $new;
    }

}