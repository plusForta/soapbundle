<?php

namespace PlusForta\RuVSoapBundle\Type;

class Zahlungseinzug
{
    /**
     * @var \PlusForta\RuVSoapBundle\Type\BankverbindungTyp
     */
    private $Bankverbindung;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\ZahlungsdienstleisterTyp
     */
    private $Zahlungsdienstleister;

    /**
     * @return \PlusForta\RuVSoapBundle\Type\BankverbindungTyp
     */
    public function getBankverbindung()
    {
        return $this->Bankverbindung;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\BankverbindungTyp $Bankverbindung
     * @return Zahlungseinzug
     */
    public function withBankverbindung($Bankverbindung)
    {
        $new = clone $this;
        $new->Bankverbindung = $Bankverbindung;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\ZahlungsdienstleisterTyp
     */
    public function getZahlungsdienstleister()
    {
        return $this->Zahlungsdienstleister;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\ZahlungsdienstleisterTyp $Zahlungsdienstleister
     * @return Zahlungseinzug
     */
    public function withZahlungsdienstleister($Zahlungsdienstleister)
    {
        $new = clone $this;
        $new->Zahlungsdienstleister = $Zahlungsdienstleister;

        return $new;
    }
}

