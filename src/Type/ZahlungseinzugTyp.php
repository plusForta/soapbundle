<?php


namespace PlusForta\RuVSoapBundle\Type;

class ZahlungseinzugTyp
{
    public ?BankverbindungTyp $Bankverbindung = null;
    public ?ZahlungsdienstleisterTyp $Zahlungsdienstleister = null;

    public function withBankverbindung(?BankverbindungTyp $Bankverbindung): ZahlungseinzugTyp
    {
        $new = clone $this;
        if ($Bankverbindung instanceof BankverbindungTyp) {
            $new->Bankverbindung = $Bankverbindung;
        }

        return $new;
    }

    public function withZahlungsdienstleister(?ZahlungsdienstleisterTyp $Zahlungsdienstleister): ZahlungseinzugTyp
    {
        $new = clone $this;
        if ($Zahlungsdienstleister instanceof ZahlungsdienstleisterTyp) {
            $new->Zahlungsdienstleister = $Zahlungsdienstleister;
        }

        return $new;
    }

}