<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\VertragsdatenDto;
use PlusForta\RuVSoapBundle\Messages\Dtos\UebergabeDokumenteDto;
use PlusForta\RuVSoapBundle\Type\DokumentenversandTyp;
use PlusForta\RuVSoapBundle\Type\MietvertragTyp;
use PlusForta\RuVSoapBundle\Type\TarifdatenTyp;
use PlusForta\RuVSoapBundle\Type\UebergabeDokumenteTyp;
use PlusForta\RuVSoapBundle\Type\VersandBuergschaftEnumTyp;
use PlusForta\RuVSoapBundle\Type\VersicherungsbedingungenEnumTyp;
use PlusForta\RuVSoapBundle\Type\VertragsdatenTyp;

class VertragsdatenFactory
{
    /**
     * @var VertragsdatenDto
     */
    private $vertragsdatenDto;
    /**
     * @var string|null
     */
    private $produkt;
    /**
     * @var string|null
     */
    private $versicherungsbedingung;
    /**
     * @var UebergabeDokumenteFactory
     */
    private $uebergabeDokumenteFactory;

    public function __construct(UebergabeDokumenteFactory $uebergabeDokumenteFactory, ?string $produkt, ?string $versicherungsbedingung)
    {

        $this->produkt = $produkt;
        $this->versicherungsbedingung = $versicherungsbedingung;
        $this->uebergabeDokumenteFactory = $uebergabeDokumenteFactory;
    }


    public function create(VertragsdatenDto $vertragsdatenDto): VertragsdatenTyp
    {
        $this->vertragsdatenDto = $vertragsdatenDto;
        $vertragsdaten = new VertragsdatenTyp();
        if ($vertragsdatenDto->Buergschaftsvariante !== null) {
            $vertragsdaten = $vertragsdaten->withBuergschaftsvariante($vertragsdatenDto->Buergschaftsvariante);
        }

        return $vertragsdaten
            ->withProdukt($this->getProduct())
            ->withVertragsbeginn($this->getVertragsbeginn())
            ->withTarifdaten($this->getTarifdaten())
            ->withMietvertrag($this->getMietvertrag())
            ->withDokumentenversand($this->getDokumentenversand())
            ->withUebergabeDokumente($this->getUebergabeDokumente())
            ;
    }

    private function getProduct(): ?string
    {
        return $this->vertragsdatenDto->product ?? $this->produkt;
    }

    private function getVertragsbeginn(): \DateTimeImmutable
    {
        return $this->vertragsdatenDto->vertragsbeginn;
    }

    private function getTarifdaten(): TarifdatenTyp
    {
        $tarif = new TarifdatenTyp();
        return $tarif
            ->withVersicherungsbedingungen($this->getVersicherungsbedingungen())
            ->withBuergschaftssumme($this->getBuergschaftssumme())
            ->withJahresbeitrag($this->getJahresbeitrag())
            ;
    }

    private function getVersicherungsbedingungen(): VersicherungsbedingungenEnumTyp
    {
        $bedingung = new VersicherungsbedingungenEnumTyp();
        $versicherungsBedingungen = $this->vertragsdatenDto->versicherungsBedingungen ?? $this->versicherungsbedingung;
        return $bedingung->withVersicherungsbedingungen($versicherungsBedingungen);
    }

    private function getBuergschaftssumme(): float
    {
        return $this->vertragsdatenDto->buergschaftssumme;
    }

    private function getJahresbeitrag(): float
    {
        return $this->vertragsdatenDto->jahresBeitrag;
    }

    private function getMietvertrag(): MietvertragTyp
    {
        $vertrag = new MietvertragTyp();
        return $vertrag->withMietvertragVom($this->getMietvertragVom())
            ->withEinzugsdatum($this->getEinzugsdatum())
            ;
    }

    private function getMietvertragVom(): \DateTimeImmutable
    {
        return $this->vertragsdatenDto->mietvertragVom;
    }

    private function getEinzugsdatum(): ?\DateTimeImmutable
    {
        return $this->vertragsdatenDto->einzugsDatum;
    }

    private function getDokumentenversand(): DokumentenversandTyp
    {
        $versand = new DokumentenversandTyp();
        return $versand->withVersandBuergschaft($this->getVersandBuergschaft());
    }

    private function getVersandBuergschaft(): VersandBuergschaftEnumTyp
    {
        $versandBuergschaft = new VersandBuergschaftEnumTyp();
        return $versandBuergschaft->withVersandBuergschaft($this->vertragsdatenDto->versandBuergschaft);
    }

    private function getUebergabeDokumente(): UebergabeDokumenteTyp
    {
        $dokumenteDto = $this->vertragsdatenDto->uebergabeDokumente ?? new UebergabeDokumenteDto();
        return $this->uebergabeDokumenteFactory->create($dokumenteDto);
    }
}