<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property string Mitarbeiternummer
 * @property string MitarbeiternummerZusaetzlicherMA
 * @property string StellennummerZusaetzlicherMA
 * @property string VermittlereigeneVorgangsnummer
 */
class MitarbeiterdatenTyp
{
    public const MAX_LENGTH_MITARBEITERNUMMER = 12;
    public const MAX_LENGTH_MITARBEITER_ZUSAETZLICHER_MA = 6;
    public const MAX_LENGTH_STELLENNUMMER_ZUSAETZLICHER_MA = 6;
    public const MAX_LENGTH_VERMITTLEREIGENE_VORGANGSNUMMER = 9;

    /**
     * @param ?string $Mitarbeiternummer
     * @return MitarbeiterdatenTyp
     */
    public function withMitarbeiternummer(?string $Mitarbeiternummer): MitarbeiterdatenTyp
    {
        $new = clone $this;
        if ($Mitarbeiternummer !== null) {
            Assert::maxLength($Mitarbeiternummer, self::MAX_LENGTH_MITARBEITERNUMMER);
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
            Assert::maxLength($MitarbeiternummerZusaetzlicherMA, self::MAX_LENGTH_MITARBEITER_ZUSAETZLICHER_MA);
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
            Assert::maxLength($StellennummerZusaetzlicherMA, self::MAX_LENGTH_STELLENNUMMER_ZUSAETZLICHER_MA);
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
            Assert::maxLength($VermittlereigeneVorgangsnummer, self::MAX_LENGTH_VERMITTLEREIGENE_VORGANGSNUMMER);
            $new->VermittlereigeneVorgangsnummer = $VermittlereigeneVorgangsnummer;
        }

        return $new;
    }


}

