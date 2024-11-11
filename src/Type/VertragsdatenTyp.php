<?php

namespace PlusForta\RuVSoapBundle\Type;

use DateTimeImmutable;
use Webmozart\Assert\Assert;

/**
 * @property string $Buergschaftsvariante
 */
class VertragsdatenTyp
{
    public const MIETKAUTION = 'Mietkaution';

    /**
     * @var string
     */
    private $Produkt = 'Miet2018';

    /**
     * @var string
     */
    private $Vertragsbeginn;

    /**
     * @var mixed
     */
    private $Tarifdaten;

    /**
     * @var mixed
     */
    private $Mietvertrag;

    /**
     * @var mixed
     */
    private $Dokumentenversand;

    /**
     * @var mixed
     */
    private $UebergabeDokumente;

    /**
     * @param ?string $Produkt
     * @return VertragsdatenTyp
     */
    public function withProdukt(?string $Produkt): VertragsdatenTyp
    {
        $new = clone $this;
        if ($Produkt !== null) {
            Assert::oneOf(
                $Produkt,
                [self::MIETKAUTION]
            );
            $new->Produkt = $Produkt;
        }

        return $new;
    }

    /**
     * @param DateTimeImmutable $Vertragsbeginn
     * @return VertragsdatenTyp
     */
    public function withVertragsbeginn(DateTimeImmutable $Vertragsbeginn): VertragsdatenTyp
    {
        $new = clone $this;
        $new->Vertragsbeginn = $Vertragsbeginn->format('d.m.Y');

        return $new;
    }

    /**
     * @param TarifdatenTyp $Tarifdaten
     * @return VertragsdatenTyp
     */
    public function withTarifdaten(TarifdatenTyp $Tarifdaten): VertragsdatenTyp
    {
        $new = clone $this;
        $new->Tarifdaten = $Tarifdaten;

        return $new;
    }

    /**
     * @param MietvertragTyp $Mietvertrag
     * @return VertragsdatenTyp
     */
    public function withMietvertrag(MietvertragTyp $Mietvertrag): VertragsdatenTyp
    {
        $new = clone $this;
        $new->Mietvertrag = $Mietvertrag;

        return $new;
    }

    /**
     * @param DokumentenversandTyp $Dokumentenversand
     * @return VertragsdatenTyp
     */
    public function withDokumentenversand(DokumentenversandTyp $Dokumentenversand)
    {
        $new = clone $this;
        $new->Dokumentenversand = $Dokumentenversand;

        return $new;
    }

    /**
     * @param UebergabeDokumenteTyp $UebergabeDokumente
     * @return VertragsdatenTyp
     */
    public function withUebergabeDokumente(UebergabeDokumenteTyp $UebergabeDokumente): VertragsdatenTyp
    {
        $new = clone $this;
        $new->UebergabeDokumente = $UebergabeDokumente;

        return $new;
    }

    public function withBuergschaftsvariante(string $buergschaftsvariante): VertragsdatenTyp
    {
        $new = clone $this;
        $new->Buergschaftsvariante = $buergschaftsvariante;

        return $new;
    }
}
