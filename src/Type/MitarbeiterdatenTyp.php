<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property string Mitarbeiternummer
 * @property string MitarbeiternummerZusaetzlicherMA
 * @property string StellennummerZusaetzlicherMA
 * @property string VermittlereigeneVorgangsnummer
 */
class MitarbeiterdatenTyp
{

    /**
     * @param ?string $Mitarbeiternummer
     * @return MitarbeiterdatenTyp
     */
    public function withMitarbeiternummer(?string $Mitarbeiternummer): MitarbeiterdatenTyp
    {
        $new = clone $this;
        if ($Mitarbeiternummer !== null) {
            $new->Mitarbeiternummer = $Mitarbeiternummer;
        }

        return $new;
    }

    /**
     * @param ?string $MitarbeiternummerZusaetzlicherMA
     * @return MitarbeiterdatenTyp
     */
    public function withMitarbeiternummerZusaetzlicherMA(?string $MitarbeiternummerZusaetzlicherMA): MitarbeiterdatenTyp
    {
        $new = clone $this;
        if ($MitarbeiternummerZusaetzlicherMA !== null) {
            $new->MitarbeiternummerZusaetzlicherMA = $MitarbeiternummerZusaetzlicherMA;
        }

        return $new;
    }

    /**
     * @param ?string $StellennummerZusaetzlicherMA
     * @return MitarbeiterdatenTyp
     */
    public function withStellennummerZusaetzlicherMA(?string $StellennummerZusaetzlicherMA): MitarbeiterdatenTyp
    {
        $new = clone $this;
        if ($StellennummerZusaetzlicherMA !== null) {
            $new->StellennummerZusaetzlicherMA = $StellennummerZusaetzlicherMA;
        }

        return $new;
    }

    /**
     * @param ?string $VermittlereigeneVorgangsnummer
     * @return MitarbeiterdatenTyp
     */
    public function withVermittlereigeneVorgangsnummer(?string $VermittlereigeneVorgangsnummer): MitarbeiterdatenTyp
    {
        $new = clone $this;
        if ($VermittlereigeneVorgangsnummer !== null) {
            $new->VermittlereigeneVorgangsnummer = $VermittlereigeneVorgangsnummer;
        }

        return $new;
    }


}

