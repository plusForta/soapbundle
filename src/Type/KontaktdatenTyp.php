<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property PrivatTyp Privat
 * @property GeschaeftlichTyp Geschaeftlich
 */
class KontaktdatenTyp
{
    private PrivatTyp $Privat;
    private GeschaeftlichTyp $Geschaeftlich;

    public function withPrivat(PrivatTyp $Privat): self
    {
        $new = clone $this;
        $new->Privat = $Privat;

        return $new;
    }

    public function withGeschaeftlich(GeschaeftlichTyp $Geschaeftlich): self
    {
        $new = clone $this;
        $new->Geschaeftlich = $Geschaeftlich;

        return $new;
    }
}

