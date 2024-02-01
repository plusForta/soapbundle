<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class MitarbeiterdatenTyp
{
    public const MAX_LENGTH_MITARBEITERNUMMER = 12;
    public const MAX_LENGTH_MITARBEITER_ZUSAETZLICHER_MA = 6;
    public const MAX_LENGTH_STELLENNUMMER_ZUSAETZLICHER_MA = 6;
    public const MAX_LENGTH_VERMITTLEREIGENE_VORGANGSNUMMER = 9;

    public string $Mitarbeiternummer;
    public string $MitarbeiternummerZusaetzlicherMA;
    public string $StellennummerZusaetzlicherMA;
    public string $VermittlereigeneVorgangsnummer;

    public function withMitarbeiternummer(?string $Mitarbeiternummer): self
    {
        $new = clone $this;
        if ($Mitarbeiternummer !== null) {
            Assert::maxLength($Mitarbeiternummer, self::MAX_LENGTH_MITARBEITERNUMMER);
            $new->Mitarbeiternummer = $Mitarbeiternummer;
        }

        return $new;
    }

    public function withMitarbeiternummerZusaetzlicherMA(?string $MitarbeiternummerZusaetzlicherMA): self
    {
        $new = clone $this;
        if ($MitarbeiternummerZusaetzlicherMA !== null) {
            Assert::maxLength($MitarbeiternummerZusaetzlicherMA, self::MAX_LENGTH_MITARBEITER_ZUSAETZLICHER_MA);
            $new->MitarbeiternummerZusaetzlicherMA = $MitarbeiternummerZusaetzlicherMA;
        }

        return $new;
    }

    public function withStellennummerZusaetzlicherMA(?string $StellennummerZusaetzlicherMA): self
    {
        $new = clone $this;
        if ($StellennummerZusaetzlicherMA !== null) {
            Assert::maxLength($StellennummerZusaetzlicherMA, self::MAX_LENGTH_STELLENNUMMER_ZUSAETZLICHER_MA);
            $new->StellennummerZusaetzlicherMA = $StellennummerZusaetzlicherMA;
        }

        return $new;
    }

    public function withVermittlereigeneVorgangsnummer(?string $VermittlereigeneVorgangsnummer): self
    {
        $new = clone $this;
        if ($VermittlereigeneVorgangsnummer !== null) {
            Assert::maxLength($VermittlereigeneVorgangsnummer, self::MAX_LENGTH_VERMITTLEREIGENE_VORGANGSNUMMER);
            $new->VermittlereigeneVorgangsnummer = $VermittlereigeneVorgangsnummer;
        }

        return $new;
    }
}

