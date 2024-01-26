<?php

namespace PlusForta\RuVSoapBundle\Type;

class VersicherungsnehmerTyp
{
    private NameTyp $Name;
    private string $Strasse;
    private string $Postleitzahl;
    private string $Ort;
    private NatuerlichePersonErweitertTyp $NatuerlichePerson;
    private GemeinschaftTyp $Gemeinschaft;

    public function getName(): NameTyp
    {
        return $this->Name;
    }

    public function withName(NameTyp $Name): self
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    public function getStrasse(): string
    {
        return $this->Strasse;
    }

    public function withStrasse(string $Strasse): self
    {
        $new = clone $this;
        $new->Strasse = $Strasse;

        return $new;
    }

    public function getPostleitzahl(): string
    {
        return $this->Postleitzahl;
    }

    public function withPostleitzahl(string $Postleitzahl): self
    {
        $new = clone $this;
        $new->Postleitzahl = $Postleitzahl;

        return $new;
    }

    public function getOrt(): string
    {
        return $this->Ort;
    }

    public function withOrt(string $Ort): self
    {
        $new = clone $this;
        $new->Ort = $Ort;

        return $new;
    }

    public function getNatuerlichePerson(): NatuerlichePersonErweitertTyp
    {
        return $this->NatuerlichePerson;
    }

    public function withNatuerlichePerson(NatuerlichePersonErweitertTyp $NatuerlichePerson): self
    {
        $new = clone $this;
        $new->NatuerlichePerson = $NatuerlichePerson;

        return $new;
    }

    public function getGemeinschaft(): GemeinschaftTyp
    {
        return $this->Gemeinschaft;
    }

    public function withGemeinschaft(GemeinschaftTyp $Gemeinschaft): self
    {
        $new = clone $this;
        $new->Gemeinschaft = $Gemeinschaft;

        return $new;
    }
}

