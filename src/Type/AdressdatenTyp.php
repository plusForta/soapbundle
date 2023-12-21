<?php

namespace PlusForta\RuVSoapBundle\Type;

class AdressdatenTyp
{

    public ?AbweichBuergEmpfaengerTyp $AbweichBuergEmpfaenger;

    private ?VersicherungsnehmerTyp $Versicherungsnehmer;

    private ?VermieterTyp $Vermieter;

    private ?MietobjektTyp $Mietobjekt;

    public function withVersicherungsnehmer(VersicherungsnehmerTyp $Versicherungsnehmer): AdressdatenTyp
    {
        $new = clone $this;
        $new->Versicherungsnehmer = $Versicherungsnehmer;

        return $new;
    }

    public function withVermieter(VermieterTyp $Vermieter): AdressdatenTyp
    {
        $new = clone $this;
        $new->Vermieter = $Vermieter;

        return $new;
    }

    public function withMietobjekt(MietobjektTyp $Mietobjekt): AdressdatenTyp
    {
        $new = clone $this;
        $new->Mietobjekt = $Mietobjekt;

        return $new;
    }

    public function withAbweichBuergEmpfaenger(?AbweichBuergEmpfaengerTyp $AbweichBuergEmpfaenger): AdressdatenTyp
    {
        $new = clone $this;
        if ($AbweichBuergEmpfaenger !== null) {
            $new->AbweichBuergEmpfaenger = $AbweichBuergEmpfaenger;
        }

        return $new;
    }
}

