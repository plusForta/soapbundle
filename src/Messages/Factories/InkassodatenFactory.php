<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\BankverbindungDto;
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
use PlusForta\RuVSoapBundle\Utils\Modify;

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
            ->withKreditinstitut(Modify::trim($bankverbindungDto->kreditinstitut, BankverbindungTyp::MAX_LENGTH_KREDITINSTITUT))
            ->withKontoinhaber(Modify::trim(
                $bankverbindungDto->kontoinhaber,
                BankverbindungTyp::MAX_LENGTH_KONTOINHABER, true
            ))
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
        $bankverbindungDto = $this->inkassodatenDto->zahlungseinzug->bankverbindung;
        if ($bankverbindungDto === null
            || $bankverbindungDto->iban === null) {
            return null;
        }
        $sepa = new SepaMandatTyp();
        return $sepa
            ->withIBAN($this->getIban($bankverbindungDto))
            ->withBIC($this->getBic($bankverbindungDto))
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
            ->withZahlungsartID($this->getZahlungsartID($zahlungsdienstleisterDto))
            ->withZahlungsvorgangID($this->getZahlungsvorgangID($zahlungsdienstleisterDto))
            ;
    }

    private function getIban(BankverbindungDto $bankverbindung): string
    {
        $iban = $bankverbindung->iban;
        return Modify::trim($iban, SepaMandatTyp::IBAN_LENGTH_MAX);
    }

    private function getBic(BankverbindungDto $bankverbindung): ?string
    {
        $bic = $bankverbindung->bic;
        return Modify::trimOrNull($bic, SepaMandatTyp::BIC_LENGTH_MAX);
    }

    private function getZahlungsartID(ZahlungsdienstleisterDto $zahlungsdienstleisterDto): ?string
    {
        $zahlungsartId = $zahlungsdienstleisterDto->zahlungsartId;
        return Modify::trimOrNull($zahlungsartId, ZahlungsdienstleisterTyp::MAX_LENGTH_ZAHLUNGSART_ID);
    }

    private function getZahlungsvorgangID(ZahlungsdienstleisterDto $zahlungsdienstleisterDto): string
    {
        $zahlungsvorgangID = $zahlungsdienstleisterDto->zahlungsvorgangID;
        return Modify::trim($zahlungsvorgangID, ZahlungsdienstleisterTyp::MAX_LENGTH_ZAHLUNGSVORGANG_ID);
    }

}