<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property PrivatTyp Privat
 * @property GeschaeftlichTyp Geschaeftlich
 */
class KontaktdatenTyp
{

    /**
     * @param PrivatTyp $Privat
     * @return KontaktdatenTyp
     */
    public function withPrivat(PrivatTyp $Privat): KontaktdatenTyp
    {
        $new = clone $this;
        $new->Privat = $Privat;

        return $new;
    }

    /**
     * @param GeschaeftlichTyp $Geschaeftlich
     * @return KontaktdatenTyp
     */
    public function withGeschaeftlich(GeschaeftlichTyp $Geschaeftlich): KontaktdatenTyp
    {
        $new = clone $this;
        $new->Geschaeftlich = $Geschaeftlich;

        return $new;
    }


}

