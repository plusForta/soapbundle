<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class KontaktnummerTyp
{

    protected const PHONE_NUMBER_REGEX = '#^(\+[0-9]{1,2}|0[0-9]{2,4})\s*[0-9\.\-\/\(\)]\s*[0-9\.\-\/\(\) ]+$#';
    public const MAX_LENGTH_VORWAHL = 15;

    /**
     * @var mixed
     */
    private $Vorwahl;

    /**
     * @var string
     */
    private $Rufnummer;

    /**
     * @param string $Vorwahl
     * @return KontaktnummerTyp
     */
    public function withVorwahl(string $Vorwahl): KontaktnummerTyp
    {
        Assert::regex($Vorwahl, '/[0+][0-9]{2,7}/');

        $new = clone $this;
        $new->Vorwahl = $Vorwahl;

        return $new;
    }

    /**
     * @param string $Rufnummer
     * @return KontaktnummerTyp
     */
    public function withRufnummer(string $Rufnummer): KontaktnummerTyp
    {
        Assert::maxLength($Rufnummer, self::MAX_LENGTH_VORWAHL);
        $new = clone $this;
        $new->Rufnummer = $Rufnummer;

        return $new;
    }
    
    public function fromRawNumber(string $rawNumber): KontaktnummerTyp
    {
        Assert::regex($rawNumber, self::PHONE_NUMBER_REGEX);
        $number = $this->trimNumber($rawNumber);

        $new = clone $this;
        $areaCode = $this->getGermanAreaCode($number);
        $new->Vorwahl = $areaCode;
        $new->Rufnummer = $this->getDialCode($number, $areaCode);

        return $new;

    }

    private function getGermanAreaCode(string $number): string
    {
        $numberWithoutCountryCode = $this->stripGermanCountryCode($number);
        $areaCodesLines = file_get_contents('/Users/janhentschel/Projects/kautionsfrei/entwicklung.onlineantrag/ONKZ.txt');
        $areaCodes = trim($areaCodesLines);
        $codes = array_filter(explode(PHP_EOL, $areaCodes), function ($elem) use ($numberWithoutCountryCode) {
            return preg_match("/^0?$elem/", $numberWithoutCountryCode) === 1;
        });

        return reset($codes) ?: '';

    }

    private function stripGermanCountryCode(string $number): string
    {
        return preg_replace('/^(0049|\+49)/', '', $number) ?? '';
    }

    private function trimNumber($number) {
        return preg_replace('/[^+0-9]/','',$number);
    }

    private function getDialCode(string $number, string $areaCode): string
    {
        $strippedAreaCode = preg_replace("/^$areaCode/", '', $number);
        return $strippedAreaCode ?: $number;
    }
}

