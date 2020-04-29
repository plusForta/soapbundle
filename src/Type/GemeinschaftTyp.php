<?php

namespace PlusForta\RuVSoapBundle\Type;

class GemeinschaftTyp
{

    /**
     * @var string
     */
    private $AnredeGemeinschaft;

    /**
     * @var mixed
     */
    private $Name;

    /**
     * @var AdresseNatuerlichePersonTyp
     */
    private $Adresse;

    /**
     * @var KontaktdatenTyp
     */
    private $Kontaktdaten;

    /**
     * @param AnredeGemeinschaftTyp $AnredeGemeinschaft
     * @return GemeinschaftTyp
     */
    public function withAnredeGemeinschaft(AnredeGemeinschaftTyp $AnredeGemeinschaft): GemeinschaftTyp
    {
        $new = clone $this;
        $new->AnredeGemeinschaft = $AnredeGemeinschaft->toString();

        return $new;
    }

    /**
     * @param NamePersonGemeinschaftTyp[] $Name
     * @return GemeinschaftTyp
     */
    public function withName($Name): GemeinschaftTyp
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @param AdresseNatuerlichePersonTyp $Adresse
     * @return GemeinschaftTyp
     */
    public function withAdresse(AdresseNatuerlichePersonTyp $Adresse): GemeinschaftTyp
    {
        $new = clone $this;
        $new->Adresse = $Adresse;

        return $new;
    }

    /**
     * @param KontaktdatenTyp $Kontaktdaten
     * @return GemeinschaftTyp
     */
    public function withKontaktdaten(KontaktdatenTyp $Kontaktdaten): GemeinschaftTyp
    {
        $new = clone $this;
        $new->Kontaktdaten = $Kontaktdaten;

        return $new;
    }

    /**
     * @return \SoapVar
     */
    public function toSoapVar(): \SoapVar
    {
        $object = [];
        $object[] = new \SoapVar(
            $this->AnredeGemeinschaft,
            XSD_STRING,
            '',
            '',
            'AnredeGemeinschaft'
        );

        foreach ($this->Name as $Name) {
            $object[] = new \SoapVar(
                $Name,
                SOAP_ENC_OBJECT,
                '',
                '',
                'Name',
                ''
            );
        }

        $object[] = new \SoapVar(
            $this->Adresse,
            SOAP_ENC_OBJECT,
            '',
            '',
            'Adresse'
        );

        $object[] = new \SoapVar(
            $this->Kontaktdaten,
            SOAP_ENC_OBJECT,
            '',
            '',
            'Kontaktdaten'
        );

        /** @psalm-suppress NullArgument*/
        return new \SoapVar($object, SOAP_ENC_OBJECT, null, null, 'Bla', null);
    }


}

