<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property AbweichBuergEmpfaengerTyp|null AbweichBuergEmpfaenger
 */
class AdressdatenTyp
{

    /**
     * @var VersicherungsnehmerTyp
     */
    private $Versicherungsnehmer;

    /**
     * @var VermieterTyp
     */
    private $Vermieter;

    /**
     * @var MietobjektTyp
     */
    private $Mietobjekt;

    /**
     * @param VersicherungsnehmerTyp $Versicherungsnehmer
     * @return AdressdatenTyp
     */
    public function withVersicherungsnehmer(VersicherungsnehmerTyp $Versicherungsnehmer): AdressdatenTyp
    {
        $new = clone $this;
        $new->Versicherungsnehmer = $Versicherungsnehmer;

        return $new;
    }

    /**
     * @param VermieterTyp $Vermieter
     * @return AdressdatenTyp
     */
    public function withVermieter(VermieterTyp $Vermieter): AdressdatenTyp
    {
        $new = clone $this;
        $new->Vermieter = $Vermieter;

        return $new;
    }

    /**
     * @param MietobjektTyp $Mietobjekt
     * @return AdressdatenTyp
     */
    public function withMietobjekt(MietobjektTyp $Mietobjekt): AdressdatenTyp
    {
        $new = clone $this;
        $new->Mietobjekt = $Mietobjekt;

        return $new;
    }

    /**
     * @param ?AbweichBuergEmpfaengerTyp $AbweichBuergEmpfaenger
     * @return AdressdatenTyp
     */
    public function withAbweichBuergEmpfaenger(?AbweichBuergEmpfaengerTyp $AbweichBuergEmpfaenger): AdressdatenTyp
    {
        $new = clone $this;
        if ($AbweichBuergEmpfaenger !== null) {
            $new->AbweichBuergEmpfaenger = $AbweichBuergEmpfaenger;
        }

        return $new;
    }


}

