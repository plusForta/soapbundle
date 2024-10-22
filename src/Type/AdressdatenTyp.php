<?php

namespace PlusForta\RuVSoapBundle\Type;

class AdressdatenTyp
{
    public ?AbweichBuergEmpfaengerTyp $AbweichBuergEmpfaenger;

    private ?VersicherungsnehmerTyp $Versicherungsnehmer;

    private ?VermieterTyp $Vermieter;

    private ?MietobjektTyp $Mietobjekt;

    public function withVersicherungsnehmer(VersicherungsnehmerTyp $Versicherungsnehmer): self
    {
        $new = clone $this;
        $new->Versicherungsnehmer = $Versicherungsnehmer;

        return $new;
    }

    public function withVermieter(VermieterTyp $Vermieter): self
    {
        $new = clone $this;
        $new->Vermieter = $Vermieter;

        return $new;
    }

    public function withMietobjekt(MietobjektTyp $Mietobjekt): self
    {
        $new = clone $this;
        $new->Mietobjekt = $Mietobjekt;

        return $new;
    }

    public function withAbweichBuergEmpfaenger(?AbweichBuergEmpfaengerTyp $AbweichBuergEmpfaenger): self
    {
        $new = clone $this;
        if ($AbweichBuergEmpfaenger !== null) {
            $new->AbweichBuergEmpfaenger = $AbweichBuergEmpfaenger;
        }

        return $new;
    }
}
