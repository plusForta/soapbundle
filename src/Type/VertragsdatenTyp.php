<?php

namespace PlusForta\RuVSoapBundle\Type;

use DateTimeImmutable;
use Webmozart\Assert\Assert;

class VertragsdatenTyp
{
    public const MIETKAUTION = 'Mietkaution';

    private string $Produkt = 'Miet2018';
    private string $Vertragsbeginn;
    private mixed $Tarifdaten;
    private mixed $Mietvertrag;
    private mixed $Dokumentenversand;
    private mixed $UebergabeDokumente;
    private string $Buergschaftsvariante;

    public function withProdukt(?string $Produkt): self
    {
        $new = clone $this;
        if ($Produkt !== null) {
            Assert::oneOf($Produkt,
                [self::MIETKAUTION]
            );
            $new->Produkt = $Produkt;
        }

        return $new;
    }

    public function withVertragsbeginn(DateTimeImmutable $Vertragsbeginn): self
    {
        $new = clone $this;
        $new->Vertragsbeginn = $Vertragsbeginn->format('d.m.Y');

        return $new;
    }

    public function withTarifdaten(TarifdatenTyp $Tarifdaten): self
    {
        $new = clone $this;
        $new->Tarifdaten = $Tarifdaten;

        return $new;
    }

    public function withMietvertrag(MietvertragTyp $Mietvertrag): self
    {
        $new = clone $this;
        $new->Mietvertrag = $Mietvertrag;

        return $new;
    }

    public function withDokumentenversand(DokumentenversandTyp $Dokumentenversand): self
    {
        $new = clone $this;
        $new->Dokumentenversand = $Dokumentenversand;

        return $new;
    }

    public function withUebergabeDokumente(UebergabeDokumenteTyp $UebergabeDokumente): self
    {
        $new = clone $this;
        $new->UebergabeDokumente = $UebergabeDokumente;

        return $new;
    }

    public function withBuergschaftsvariante(string $buergschaftsvariante): self
    {
        $new = clone $this;
        $new->Buergschaftsvariante = $buergschaftsvariante;

        return $new;
    }
}

