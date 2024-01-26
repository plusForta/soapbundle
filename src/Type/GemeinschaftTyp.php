<?php

namespace PlusForta\RuVSoapBundle\Type;

class GemeinschaftTyp
{
    private string $AnredeGemeinschaft;
    private NamePersonGemeinschaftTyp $NameErstePerson;
    private NamePersonGemeinschaftOhneNamenszusatzTyp $NameZweitePerson;
    private AdresseNatuerlichePersonTyp $Adresse;
    private KontaktdatenTyp $Kontaktdaten;

    public function getAnredeGemeinschaft(): string
    {
        return $this->AnredeGemeinschaft;
    }

    public function withAnredeGemeinschaft(string $AnredeGemeinschaft): self
    {
        $new = clone $this;
        $new->AnredeGemeinschaft = $AnredeGemeinschaft;

        return $new;
    }

    public function getNameErstePerson(): NamePersonGemeinschaftTyp
    {
        return $this->NameErstePerson;
    }

    public function withNameErstePerson(NamePersonGemeinschaftTyp $NameErstePerson): self
    {
        $new = clone $this;
        $new->NameErstePerson = $NameErstePerson;

        return $new;
    }

    public function getNameZweitePerson(): NamePersonGemeinschaftOhneNamenszusatzTyp
    {
        return $this->NameZweitePerson;
    }

    public function withNameZweitePerson(NamePersonGemeinschaftOhneNamenszusatzTyp $NameZweitePerson): self
    {
        $new = clone $this;
        $new->NameZweitePerson = $NameZweitePerson;

        return $new;
    }

    public function getAdresse(): AdresseNatuerlichePersonTyp
    {
        return $this->Adresse;
    }

    public function withAdresse(AdresseNatuerlichePersonTyp $Adresse): self
    {
        $new = clone $this;
        $new->Adresse = $Adresse;

        return $new;
    }

    public function getKontaktdaten(): KontaktdatenTyp
    {
        return $this->Kontaktdaten;
    }

    public function withKontaktdaten(KontaktdatenTyp $Kontaktdaten): self
    {
        $new = clone $this;
        $new->Kontaktdaten = $Kontaktdaten;

        return $new;
    }
}

