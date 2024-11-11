<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class SepaMandatTyp
{
    public const BIC_NONE = 'ohne Angabe';
    public const IBAN_LENGTH_MAX = 34;
    public const BIC_LENGTH_MAX = 11;

    /**
     * @var string
     */
    private $IBAN;

    /**
     * @var string
     */
    private $BIC;

    /**
     * @param string $IBAN
     * @return SepaMandatTyp
     */
    public function withIBAN(string $IBAN): SepaMandatTyp
    {
        Assert::maxLength($IBAN, self::IBAN_LENGTH_MAX);
        $new = clone $this;
        $new->IBAN = $IBAN;

        return $new;
    }

    /**
     * @param string $BIC
     * @return SepaMandatTyp
     */
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
