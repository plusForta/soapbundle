<?php

namespace PlusForta\RuVSoapBundle\Type;

use DateTimeImmutable;

class NatuerlichePersonErweitertTyp
{
    /**
     * @var mixed
     */
    private $Name;

    /**
     * @var mixed
     */
    private $Adresse;

    /**
     * @var mixed
     */
    private $Kontaktdaten;

    /**
     * @var string
     */
    private $Geburtsdatum;

    /**
     * @var string
     */
    private $Nationalitaet;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param NameNatuerlichePersonHerrFrauTyp $Name
     * @return NatuerlichePersonErweitertTyp
     */
    public function withName(NameNatuerlichePersonHerrFrauTyp $Name): NatuerlichePersonErweitertTyp
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @param AdresseNatuerlichePersonTyp $Adresse
     * @return NatuerlichePersonErweitertTyp
     */
    public function withAdresse(AdresseNatuerlichePersonTyp $Adresse): NatuerlichePersonErweitertTyp
    {
        $new = clone $this;
        $new->Adresse = $Adresse;

        return $new;
    }

    /**
     * @param KontaktdatenTyp $Kontaktdaten
     * @return NatuerlichePersonErweitertTyp
     */
    public function withKontaktdaten(KontaktdatenTyp $Kontaktdaten): NatuerlichePersonErweitertTyp
    {
        $new = clone $this;
        $new->Kontaktdaten = $Kontaktdaten;

        return $new;
    }

    /**
     * @param DateTimeImmutable $Geburtsdatum
     * @return NatuerlichePersonErweitertTyp
     */
    public function withGeburtsdatum(DateTimeImmutable $Geburtsdatum): NatuerlichePersonErweitertTyp
    {
        $new = clone $this;
        $new->Geburtsdatum = $Geburtsdatum->format('d.m.Y');

        return $new;
    }

    /**
     * @param string $Nationalitaet
     * @return NatuerlichePersonErweitertTyp
     */
    public function withNationalitaet($Nationalitaet): NatuerlichePersonErweitertTyp
    {
        $new = clone $this;
        $new->Nationalitaet = $Nationalitaet;

        return $new;
    }
}
