<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\InkassodatenDto;
use PlusForta\RuVSoapBundle\Messages\Dtos\ZahlungsdienstleisterDto;
use PlusForta\RuVSoapBundle\Type\BankverbindungTyp;
use PlusForta\RuVSoapBundle\Type\InkassoartEnumTyp;
use PlusForta\RuVSoapBundle\Type\InkassodatenTyp;
use PlusForta\RuVSoapBundle\Type\LastschriftverfahrenTyp;
use PlusForta\RuVSoapBundle\Type\SepaMandatTyp;
use PlusForta\RuVSoapBundle\Type\ZahlungsdienstleisterTyp;
use PlusForta\RuVSoapBundle\Type\ZahlungseinzugTyp;
use PlusForta\RuVSoapBundle\Type\ZahlungsweiseEnumTyp;

class InkassodatenFactory
{
    /**
     * @var InkassodatenDto
     */
    private $inkassodatenDto;

    public function __construct(InkassodatenDto $inkassodatenDto)
    {
        $this->inkassodatenDto = $inkassodatenDto;
    }

    public function create(): InkassodatenTyp
    {
        $inkassodaten = new InkassodatenTyp();
        return $inkassodaten
            ->withZahlungsweise($this->getZahlungsweise())
            ->withInkassoart($this->getInkassoart())
            ->withZahlungseinzug($this->getZahlungseinzug())

            ;
    }

    private function getZahlungsweise(): ZahlungsweiseEnumTyp
    {
        $zahlungsweise = new ZahlungsweiseEnumTyp();
        return $zahlungsweise->withZahlungsweise($this->inkassodatenDto->zahlungsweise);
    }

    private function getInkassoart(): InkassoartEnumTyp
    {
        $inkassoart = new InkassoartEnumTyp();
        return $inkassoart->withInkassoart($this->inkassodatenDto->inkassoart);

    }

    private function getZahlungseinzug()
    {
        $zahlungseinzug = new ZahlungseinzugTyp();
        return $zahlungseinzug
            ->withBankverbindung($this->getBankverbindung())
            ->withZahlungsdienstleister($this->getZahlungsdienstleister());

    }

    private function getBankverbindung(): ?BankverbindungTyp
    {
        $bankverbindungDto = $this->inkassodatenDto->zahlungseinzug->bankverbindung;
        if ($bankverbindungDto === null) {
            return null;
        }

        $bank = new BankverbindungTyp();
        return $bank
            ->withLastschriftverfahren($this->getLastschriftverfahren())
            ->withSepaMandat($this->getSepaMandat())
            ->withKreditinstitut($bankverbindungDto->kreditinstitut)
            ->withKontoinhaber($bankverbindungDto->kontoinhaber)
            ;
    }

    private function getLastschriftverfahren(): ?LastschriftverfahrenTyp
    {
        if ($this->inkassodatenDto->zahlungseinzug->bankverbindung === null
            || $this->inkassodatenDto->zahlungseinzug->bankverbindung->kontonummer === null
        ) {
            return null;
        }

        $lastschrift = new LastschriftverfahrenTyp();
        return $lastschrift
            ->withBankleitzahl($this->inkassodatenDto->zahlungseinzug->bankverbindung->bankleitzahl)
            ->withKontonummer($this->inkassodatenDto->zahlungseinzug->bankverbindung->kontonummer)
            ;
    }

    private function getSepaMandat(): ?SepaMandatTyp
    {
        if ($this->inkassodatenDto->zahlungseinzug->bankverbindung === null
            || $this->inkassodatenDto->zahlungseinzug->bankverbindung->iban === null) {
            return null;
        }
        $sepa = new SepaMandatTyp();
        return $sepa
            ->withIBAN($this->inkassodatenDto->zahlungseinzug->bankverbindung->iban)
            ->withBIC($this->inkassodatenDto->zahlungseinzug->bankverbindung->bic)
            ;
    }

    private function getZahlungsdienstleister(): ?ZahlungsdienstleisterTyp
    {
        $zahlungsdienstleisterDto = $this->inkassodatenDto->zahlungseinzug->zahlungsdienstleister;
        if ($zahlungsdienstleisterDto === null) {
            return null;
        }
        $dienstleister = new ZahlungsdienstleisterTyp();
        return $dienstleister
            ->withZahlungsartID($zahlungsdienstleisterDto->zahlungsartId)
            ->withZahlungsvorgangID($zahlungsdienstleisterDto->zahlungsvorgangID)
            ;
    }

}