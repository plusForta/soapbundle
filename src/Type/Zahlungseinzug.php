<?php

namespace PlusForta\RuVSoapBundle\Type;

class Zahlungseinzug
{
    private BankverbindungTyp $Bankverbindung;
    private ZahlungsdienstleisterTyp $Zahlungsdienstleister;

    public function getBankverbindung(): BankverbindungTyp
    {
        return $this->Bankverbindung;
    }

    public function withBankverbindung(BankverbindungTyp $Bankverbindung): self
    {
        $new = clone $this;
        $new->Bankverbindung = $Bankverbindung;

        return $new;
    }

    public function getZahlungsdienstleister(): ZahlungsdienstleisterTyp
    {
        return $this->Zahlungsdienstleister;
    }

    public function withZahlungsdienstleister(ZahlungsdienstleisterTyp $Zahlungsdienstleister): self
    {
        $new = clone $this;
        $new->Zahlungsdienstleister = $Zahlungsdienstleister;

        return $new;
    }
}

