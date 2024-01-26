<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class SepaMandatTyp
{

    final public const BIC_NONE = 'ohne Angabe';
    final public const IBAN_LENGTH_MAX = 34;
    final public const BIC_LENGTH_MAX = 11;

    private string $IBAN;
    private string $BIC;

    public function withIBAN(string $IBAN): SepaMandatTyp
    {
        Assert::maxLength($IBAN, self::IBAN_LENGTH_MAX);
        $new = clone $this;
        $new->IBAN = $IBAN;

        return $new;
    }

    public function withBIC(?string $BIC): SepaMandatTyp
    {
        if ($BIC === null) {
            $BIC = self::BIC_NONE;
        }

        Assert::maxLength($BIC, self::BIC_LENGTH_MAX);

        $new = clone $this;
        $new->BIC = $BIC;

        return $new;
    }
}

